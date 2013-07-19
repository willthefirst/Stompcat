<?php

// Template Name: Home Page - Subscribe

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

cfct_header();
?>

<?php
// For the loop used, look in /loops
cfct_loop();
?>

<!-- Email -->
<div class="strip strip-email">
	<form class="container" action="http://stompcat.us7.list-manage.com/subscribe/post" method="POST" target="_blank">
		<input type="hidden" name="u" value="a9647b6224323ceb07cf3ab54" />
		<input type="hidden" name="id" value="18f86f4bfb" />
		<div class="row">
			<div class="span5">
				<label for="MERGE0">Your Email:</label>
				<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Your Email" required/>
			</div>
			<div class="span3 hide-on-small-max">
				<label for="MERGE1">First Name:</label>
				<input type="text" name="MERGE1" id="MERGE1" size="25" value="" pattern="^[\S]*$" oninvalid="setCustomValidity('We just need your first name.')" placeholder="Your First Name" />
			</div>
			<div class="span1">
				<input type="submit" value="Submit" />
			</div>
			<div class="span2">
				<span class="small">Here is some info about this action.</span>
			</div>
		</div>
	</form>
</div>

<!-- Facebook -->
<div class="strip strip-fb">
	<div class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></div>
</div>

<!-- Twitter -->
<a href="https://twitter.com/intent/follow?&screen_name=Stompcat" class="strip strip-tw">
	<div class="twitter">
		Test
	</div>
</a>



<?php
get_footer();
?>