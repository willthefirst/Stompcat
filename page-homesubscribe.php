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
	<div class="container prompt">
		<span class="prompt-descr">1) GET PRETTY ICONS FOR STEP 1 2 AND 3.For emails about the really important stuff, get on the Stomplist. ORDER SHOULD BE: " (1) LIKE US ON FACEBOOK [SMALL AND NEXT LINE.=] FOR EMAILS ABOUT THE ..."</span>
	</div>
	<form class="container email-form" action="http://stompcat.us7.list-manage.com/subscribe/post" method="POST" target="_blank">
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
				<div class="prompt">
					<span class="prompt-descr">2) For behind-the-scene updates, upcoming show info, and stories of Stompcat,</span>
				</div>
				<p>
					<span class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></span>
					us on Facebook.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Twitter -->
<div class="strip strip-tw">
	<div class="container">
		<div class="row prompt">
			<div class="span12 prompt-descr">
				<p>
					3) And if you feel so inclined,  <a href="https://twitter.com/stompcat" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stompcat</a>
					us. We hear it's all the rage.
				</p>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
	</div>
</div>



<?php
get_footer();
?>