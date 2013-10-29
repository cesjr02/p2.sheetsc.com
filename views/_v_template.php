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
		<a href='/'><img src="/images/logo.png" width="300px" height="138px" align="left" alt="logo"> </a>
		
			<nav>
				<!-- Menu for logged in users -->
				<?php if($user): ?>
						
				<a href='/posts'>Yapper Feed</a>
				<a href='/posts/add'>Yap</a>
				<a href='/posts/users'>Connect</a>
				<a href='/users/profile'>My Profile</a>			
				<a href='/users/logout'>Sign out</a>
						
						
				<!-- Menu for users who are not logged in -->
				<?php else: ?>
				
				<a href='/users/signup'>Register</a>
				<a href='/users/login'>Sign in</a>		
		
				
						
				<?php endif; ?>
			</nav>
			
	</div> <!-- End of headerContent -->
</header>

<div id="wrapper">

	<?php if(isset($content)) echo $content; ?>
	
	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</div> <!-- End of wrapper -->


<footer>
	<p>2013 YapperBox - Developed and Designed by CJ Sheets</p>
</footer>


</body>

</html>