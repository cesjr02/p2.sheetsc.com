<section class='content'>

	<h2>New to YapperBox?</h2>
	
	<p>
	Use the sign up form on the right to experience all the great features YapperBox has to offer.
	</p>

</section>



<aside>

	<h2>Sign up</h2>
	
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
				
		<?php if(isset($error)): ?>
			<div class='error'>
				All fields required.
			</div>						
		<?php endif; ?>  
			
		<input type='submit' value='SUBMIT' class='button'>
			
	</form>

</aside>