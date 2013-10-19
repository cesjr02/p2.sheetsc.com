<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        	
        # Set page title
		$this->template->title = "Sign Up";
			
		# Render view
		echo $this->template;
        
    }
    
    public function p_signup() {
	    
	    # Dump the results of POST to see what the form submitted
	    // echo '<pre>';
	    // print_r($_POST);
	    // echo '</pre>';
	    
	    # More data we want stored with the user
	    $_POST['created']  = Time::now();
	    $_POST['modified'] = Time::now();
	    
	    # Encrypt the password
	    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	    
	    # Create an encrypted token via their email address and a random string
	    $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
	   
	    
	    # Insert this into the database
	    $user_id = DB::instance(DB_NAME)->insert('users', $_POST);
	    
	    # Signup confirm
	    echo 'You have signed up';
	    
    }

    public function login($error = NULL) {
        
        # Setup view
        $this->template->content = View::instance('v_users_login');
        
        # Setup page title
        $this->template->title   = "Login";
        
        # Pass data to the view
        $this->template->content->error = $error;
        
        # Render view
        echo $this->template;
   
    }
    
    public function p_login() {
	    
	    # Sanitize the user entered data to prevent SQL Injection Attacks
	    $_POST = DB::instance(DB_NAME)->sanitize($_POST);
	    
	    # Hash submitted password so we can compare it against the one in the DB
	    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	    
	    # Search the DB for this email and password
	    # Retrieve the token if it's available
	    $q = "SELECT token
	    	FROM users
	    	WHERE email = '".$_POST['email']."'
	    	AND password = '".$_POST['password']."'";
	    	
	    $token = DB::instance(DB_NAME)->select_field($q);
	    
	    # Looks for matching token in DB
	    if(!$token) {
		    
		    # Token not found. Login failed, sends user back to login
		    Router::redirect("/users/login/error");
		
	    }
	    
	    else {
		    
		    setcookie("token", $token, strtotime('+1 year'), '/');
		    
		    # Token found, login successful		
		    Router::redirect("/users/profile");
		    // echo "You are logged in!";
	    }
	    
    }

    public function logout() {
        
        # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
        
        # Create the data array we'll use with the update method
        # In this care, we're only updated one field, so our array only has one entry
        $data = Array("token" => $new_token);
        
        # Do the update
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");
        
        # Delete their token cookie by setting it to a date in the past -  effectively logging them out
        setcookie("token", "", strtotime('-1 year'), '/');
        
        # Send them back to the main index
        Router::redirect("/");
        
    }

    public function profile() {

		# If user is blank, they're not logged in; redirect them to the login page
		if(!$this->user) {
			Router::redirect('/users/login');
		}
		
		# If they weren't redirected away, continue:
		
		# Setup view
		$this->template->content = View::instance('v_users_profile');
		$this->template->title   = "Profile of".$this->user->first_name;
		
		# Render view
		echo $this->template;
             
    }

} # end of the class