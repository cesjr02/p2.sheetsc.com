<?=$post['post_id']?>

<?=print_r($posts);?>

<?php foreach($posts as $post): ?>
	<form action="/posts/confirm_delete/<?=$post['post_id']?>" method="post">
		<input type="submit" name="delete" value="Confirm"/>
	</form>
<?=Time::display($post['created'])?>							
				
<?=$post['first_name']?>
<?=$post['content']?>
		
<?php endforeach; ?>

