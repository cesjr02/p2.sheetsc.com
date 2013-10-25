<h2>Sign in</h2>

<form method='POST' action='/users/p_login'>

	Email<br>
	<input type='text' name='email' class='field'>
	<br>
	
	Password<br>
	<input type='password' name='password' class='field'>
	<br>
	
	<?php if(isset($error)): ?>
		<div class='error'>
			Login failed. Please double check your email and password.
		</div>
		<br>
	<?php endif; ?>
	
	<input type='submit' value='SIGN IN' class='button'>

</form>
