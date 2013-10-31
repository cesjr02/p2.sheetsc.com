<h2>About Me</h2>

<h4>Name: <span><?=$user->first_name?> <?=$user->last_name?></span></h4>
<h4>Join Date: <span><?= date('F j, Y', $user->created) ?></span></h4>    
     
<?php if ($user->image  == 'placeholder.jpg'): ?>
<?php endif; ?>

<form method='POST' enctype="multipart/form-data" action='/users/p_profile/'>
	
	<img class="avatar" src="/uploads/avatars/<?=$user->image ?>" alt="<?=$user->first_name . ' ' . $user->last_name ?>"><br />
	<h3 class="update" >Update profile picture:</h3>
	<input type="file" name="file" id="file"><br>
	
	<?php if(isset($error)): ?>
		<div class="error">
			Upload failed.<br /> 
			Upload must be an image file; jpg, gif, or png.
		</div>
	<?php endif; ?>
	
	<input type="submit" name="submit" value="Update" class="button" id="buttonUpdate" user="Submit">
	
<form>
