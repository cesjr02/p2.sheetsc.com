<h2>About Me</h2>
<h3>This is the profile of <?=$user->first_name?> <?=$user->last_name?>.</h3>

<p><b>Name:</b> <?=$user->first_name?> <?=$user->last_name?></p>       
        
<form method='POST' enctype="multipart/form-data" action='/users/p_upload/'>
	
	<img src="/uploads/avatars/placeholder.jpg"><br>
	<label for="file">Upload Photo:</label><br>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" user="Submit">
<form>


