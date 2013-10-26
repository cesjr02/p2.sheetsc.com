<h1>Users to follow:</h1>

<? foreach($users as $user): ?>

	<!-- Print this user's name -->
	<h2><?=$user['first_name']?> <?=$user['last_name']?></h2>
	
	<!-- If there exists a connection with this user, show a unfollow link -->
	<? if(isset($connections[$user['user_id']])): ?>
		<a href='/posts/unfollow/<?=$user['user_id']?>'><img src='/images/unfollow.png' width='125px' 		height='36px' align='left' alt='unfollow'></a>
		
	<!-- Otherwise, show the follow link -->
	<? else: ?>
		<a href='/posts/follow/<?=$user['user_id']?>'><img src='/images/follow.png' width='125px' 			height='36px' align='left' alt='follow'></a>
	<? endif; ?>
	
	<br>

<? endforeach; ?>