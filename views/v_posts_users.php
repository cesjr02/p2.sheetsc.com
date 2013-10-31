<section class='contentFollow'>

<h2>Follow some Yappers</h2>

<p class="spaceAfter">Choose to follow or unfollow from a list of users below.</p>

<? foreach($users as $yapper): ?>

	<!-- you can't unfollow yourself so your button isn't shown -->
    <?php if ($user->user_id != $yapper['user_id']) : ?>

		<!-- Print this user's name -->
		<h3><?=$yapper['first_name']?> <?=$yapper['last_name']?></h3>
		
		<!-- If there exists a connection with this user, show a unfollow link -->
		<? if(isset($connections[$yapper['user_id']])): ?>
			<a href='/posts/unfollow/<?=$yapper['user_id']?>'><input type='submit' value='Unfollow' class='button' id="buttonFollow" ></a>
			
		<!-- Otherwise, show the follow link -->
		<? else: ?>
			<a href='/posts/follow/<?=$yapper['user_id']?>'><input type='submit' value='Follow' class='button' id="buttonFollow" ></a>
		<? endif; ?>
		<br>
	
	<?php endif; ?>

<? endforeach; ?>

</section>