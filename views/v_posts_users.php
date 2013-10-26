<section class='contentFollow'>

<h1>Follow some Yappers</h1>

<p> 
Choose to follow or unfollow from a list of users below. 
</p>

<? foreach($users as $yapper): ?>

	<!-- you can't unfollow yourself so your button isn't shown -->
    <?php if ($user->user_id != $yapper['user_id']) : ?>

		<!-- Print this user's name -->
		<h2><?=$yapper['first_name']?> <?=$yapper['last_name']?></h2>
		
		<!-- If there exists a connection with this user, show a unfollow link -->
		<? if(isset($connections[$yapper['user_id']])): ?>
			<a href='/posts/unfollow/<?=$yapper['user_id']?>'><img src='/images/unfollow.png' width='101px' height='29px' align='left' alt='unfollow'></a>
			
		<!-- Otherwise, show the follow link -->
		<? else: ?>
			<a href='/posts/follow/<?=$yapper['user_id']?>'><img src='/images/follow.png' width='101px' height='29px' align='left' alt='follow'></a>
		<? endif; ?>
		<br>
	
	<?php endif; ?>

<? endforeach; ?>

</section>