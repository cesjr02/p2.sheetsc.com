<section class='contentMain'>
	<!-- If User is logged in -->
	<?php if($user): ?>
    <h1>Hello,  <?php if($user): ?><?php echo $user->first_name; ?><?php endif; ?>.</h1>
	<!-- If User is NOT logged in -->
	<?php else: ?>
    <h1>Welcome!</h1>
    <?php endif; ?> 
    
	<p>
	Welcome to Yapperbox. Yapperbox is a community where users can easily connect with others and share ideas. Signup and start making connections so you always stay in the loop. Start yapping today!
	</p>
	
	
	<div id="main-info-graphic">
	<img src="/images/main-info-graphic.png" class="main-info-graphic" alt="info graphic">
	</div> <!-- end of main info graphic -->
		
</section>

<aside>
	<?=$moreContent;?> 
	
	<div>
		<h3 class="features" >+1 Features:</h3>
		<ul>
		 	<li>
			 	<span>Email confirmation upon user signup</span>
		 	</li>
		 	
		 	<li>
			 	<span>Upload avatar to profile page</span>
		 	</li>	
		</ul>
	</div>   
</aside>


