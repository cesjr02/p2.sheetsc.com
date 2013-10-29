<section class='content'>
<h2>Yapper Feed</h2>

<?php if (count($posts) == 0) :?>
        <p>Hey, you haven't followed anyone yet!<br>Why not <a href="/posts/users">follow some Yappers</a> now?</p>
<?php endif; ?>

<?php foreach($posts as $post): ?>

<article>

	<h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>
	
	<p><?=$post['content']?></p>
	
	<time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>">
		<?=Time::display($post['created'])?>
	</time>

</article>

<?php endforeach; ?>
</section>