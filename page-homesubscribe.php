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
			<div class="span5 email-input-container">
				<label for="MERGE0">Your Email:</label>
				<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Your Email" required/>
			</div>
			<div class="span3 hide-on-small-max">
				<label for="MERGE1">First Name:</label>
				<input type="text" name="MERGE1" id="MERGE1" size="25" value="" pattern="^[\S]*$" oninvalid="setCustomValidity('We just need your first name.')" placeholder="First Name" />
			</div>
			<div class="span4">
				<button class="button" style="width:100%" type="submit">Sign me up</button>
			</div>
		</div>
	</form>
</div>

<!-- Facebook -->
<div class="strip strip-fb">
	<div class="container">
		<div class="row">
			<div class="span12 text-centered">
				<p>For photos, videos, and quick updates, you should most definitely
					<span class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></span>
					us.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Twitter -->
<div class="strip strip-tw">
	<div class="container">
		<div class="row">
			<div class="span12 text-centered">
				<p>
					And if you feel so inclined,  <a href="https://twitter.com/stompcat" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stompcat</a>
					us too. Yeah. We're pretty connected.
				</p>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
	</div>
</div>



<?php
get_footer();
?>