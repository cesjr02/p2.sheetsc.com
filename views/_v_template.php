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
	
		
			
			<!-- Menu for logged in users -->
			<?php if($user): ?>
			
			<a href='/posts'>Home</a>
			<a href='/posts/users'>Follow</a>
			<a href='/users/profile'>Profile</a>			
			<a href='/users/logout'>Sign out</a>
			
			<!-- Menu for users who are not logged in -->
			<?php else: ?>
			
			<a href='/'>Home</a>
			<a href='/users/signup'>Sign up</a>
			<a href='/users/login'>Sign in</a>
			
			<?php endif; ?>
		</ul>
	</nav>
</header>


	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>