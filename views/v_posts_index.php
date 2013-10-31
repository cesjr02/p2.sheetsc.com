<section class='content'>
<h2>Yapper Feed</h2>

	<?php if(empty($posts)): ?>
	
		<p>
			Click <a href="/posts/users/">here</a> to start following other users. 
		</p>
	
	<?php endif; ?>
	
	<?php foreach($posts as $post): ?>

<article>

	<?php if($post['user_id'] == $user->user_id): ?>
		<h3>You Yapped:<h3>
	<?php else: ?>
		<h3><?=$post['first_name']?> <?=$post['last_name']?> Yapped:</h3>
	<?php endif; ?>
	
		<p class="postContent"><?=$post['content']?></p>
	
		<p class="datetime">Yapped on: <time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>">
		<?=Time::display($post['created'])?>
		</time></p>
	
	<?php if($post['user_id'] == $user->user_id): ?>
		<h3><a href="/posts/confirm_delete/<?php echo $post['id']; ?>"><input type='submit' value='Delete Post' class='button' id="buttonDelete" ></a><h3>
	<?php else: ?>
	<?php endif; ?>

</article>

	<?php endforeach; ?>
	
</section>