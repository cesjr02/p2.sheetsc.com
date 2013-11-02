<h2>Member Login</h2>

<!-- form for user login -->	
<form method='POST' action='/users/p_login'>
		
	Email<br>
	<input type='email' name='email' class='field' required>
	<br>
			
	Password<br>
	<input type='password' name='password' class='field' required>
	<br>
	
	<!-- shows error if login failed -->		
	<?php if(isset($error)): ?>
		<div class='error'>
			Login failed. Please double check your email and password.
		</div>
		<br>
	<?php endif; ?>
			
	<input type='submit' value='Sign in' class='button' id="loginButton">
		
</form>

