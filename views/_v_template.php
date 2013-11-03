<!DOCTYPE html>
<html>

<head>
	<!-- Bookmark Icon -->
	<link rel="icon" type="image/png" href="images/bookmark-icon/myicon.png" />
	<link rel="shortcut icon" href="/images/bookmark-icon/myicon.png?v=2" />
	
	<!-- Apple Icon -->      
	<link rel="apple-touch-icon-precomposed" href="images/bookmark-icon/apple-touch-iphone.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/bookmark-icon/apple-touch-ipad.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/bookmark-icon/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/bookmark-icon/apple-touch-ipad-retina.png" />

	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300' rel='stylesheet' 	type='text/css' />

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<header class="mainHeader">
	<div id="headerContent">
		<a href='/'><img src="/images/logo.png" id="logo" alt="logo"></a>
		
			<nav>
				<!-- Menu for logged in users -->
				<?php if($user): ?>
						
				<a href='/posts'>Yapper Feed</a>
				<a href='/posts/add'>Yap</a>
				<a href='/posts/users'>Connect</a>
				
				<!-- if user is logged in, full name displayed in menu bar -->
				<a href='/users/profile'><?=$user->first_name?> <?=$user->last_name?></a>			
				<a href='/users/logout'>Sign out</a>
						
						
				<!-- Menu for users who are not logged in -->
				<?php else: ?>
				
				<a href='/'>Home/login</a>
				<a href='/users/signup'>Register</a>
						
				<?php endif; ?>
			</nav>
			
	</div> <!-- End of headerContent -->
</header>

<div id="wrap">

	<?php if(isset($content)) echo $content; ?>
	
	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</div> <!-- End of wrap -->


<footer>
	<p>2013 YapperBox - Developed and Designed by CJ Sheets</p>
</footer>

</body>

</html>