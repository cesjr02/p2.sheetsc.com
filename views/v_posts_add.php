<!-- form for adding a new post -->
<form method='POST' action='/posts/p_add'>
	
	<!-- maxlength defined as 255 -->
	<h2><label for='content'>Yap about something.</label></h2>
	<textarea maxlength='255' name='content' id='content' class='textarea' required></textarea>
	<br>
	<input type='submit' class='button 'value='Yap'>
	
</form>