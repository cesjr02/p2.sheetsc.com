<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<header>
	<nav>
	
			<a href='/'>Home</a>
			
			<!-- Menu for logged in users -->
			<?php if($user): ?>
			
			<a href='/users/logout'>Logout</a>
			<a href='/users/profile'>Profile</a>
			
			<!-- Menu for users who are not logged in -->
			<?php else: ?>
			
			<a href='/users/signup'>Sign Up</a>
			<a href='/users/login'>Login</a>
			
			<?php endif; ?>
		</ul>
	</nav>
</header>


	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>