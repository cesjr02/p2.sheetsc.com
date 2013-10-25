<!DOCTYPE html>
<html>
<head>

	<!-- Start of Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300' rel='stylesheet' 	type='text/css' />
	<!-- End of Google Web Fonts -->

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<header class="mainHeader">
	<div id="headerContent">
		<img src="/images/logo.png" width="300px" height="138px" align="left" alt="logo">
		
			<nav>
				<!-- Menu for logged in users -->
				<?php if($user): ?>
						
				<a href='/posts'>Home</a>
				<a href='/posts/users'>Connect</a>
				<a href='/users/profile'>Profile</a>			
				<a href='/users/logout'>Sign out</a>
						
						
				<!-- Menu for users who are not logged in -->
				<?php else: ?>
						
				<a href='/'>Home</a>
				<a href='/users/signup'>Sign up</a>
				<a href='/users/login'>Sign in</a>
						
				<?php endif; ?>
			</nav>
			
	</div> <!-- End of headerContent -->
</header>

<div id="wrapper">
	
	<section class="content">
		<?php if(isset($content)) echo $content; ?>
	
		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	</section>

<aside>
</aside>

</div> <!-- End of wrapper -->

</body>


<!--
<footer>
		<p>© 2013 YapperBox</p>
</footer>
-->
</html>