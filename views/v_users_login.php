<h2>Member Login</h2>
	
		<form method='POST' action='/users/p_login'>
		
			Email<br>
			<input type='email' name='email' class='field' placeholder='Enter email' required>
			<br>
			
			Password<br>
			<input type='password' name='password' class='field' placeholder='Enter password' required>
			<br>
			
			<?php if(isset($error)): ?>
				<div class='error'>
					Login failed. Please double check your email and password.
				</div>
				<br>
			<?php endif; ?>
			
			<input type='submit' value='Sign in' class='button'>
		
		</form>

