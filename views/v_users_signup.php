<section class='content'>

	<h2>New to YapperBox?</h2>
	
	<p>
	Create an account using the form on the right to experience all the great features YapperBox has to offer.
	</p>

</section>

<aside>

	<h2>Create Account</h2>
	
	<form method='POST' action='/users/p_signup'>
		
		First Name<br>
	    <input type='text' name='first_name' class='field' value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>'><br>
	        
	    Last Name<br>
	    <input type='text' name='last_name' class='field' value='<?php if(isset($_POST['last_name'])) echo $_POST['last_name']?>'><br>
	        
	    Email<br>
	    <input type='text' name='email' class='field' value='<?php if(isset($_POST['email'])) echo $_POST['email']?>'><br>
	
			
		Password<br>
		<input type='password' name='password' class='field'>
		<br>
		
		Retype Password<br>
        <input type='password' name='retype' class='field'>
        
		<!-- Check to see if error isset. If so, echo specific error. -->		
		<?php if(isset($error)): ?>
			<div class='error'>
				Sign up failed.<br>
				<?php echo $error; ?>
			</div>						
		<?php endif; ?>  
			
		<input type='submit' value='Submit' class='button'>
			
	</form>

</aside>