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

<div class="strip strip-cta">
	<div class="container">
		<div class="row">
			<!-- Email -->
			<div class="span4 email-cta">
				<div class="cta-head">
					<h2 class="prompt-cta">
						Get the <span class="purple">Stompletter</span>.
					</h2>
				</div>
				<div class="cta-action">
					<form class="email-form" action="http://stompcat.us7.list-manage.com/subscribe/post" method="POST" target="_blank">
						<input type="hidden" name="u" value="a9647b6224323ceb07cf3ab54" />
						<input type="hidden" name="id" value="18f86f4bfb" />
						<div>
							<label for="MERGE1">First Name:</label>
							<input type="text" name="MERGE1" id="MERGE1" size="25" value="" pattern="^[\S]*$" oninvalid="setCustomValidity('We just need your first name.')" placeholder="Your first name" />
						</div>
						<div class="email-input-container">
							<label for="MERGE0">Your Email:</label>
							<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Your email" required/>
						</div>
						<div>
							<button class="button-custom button-large" style="width:100%" type="submit">Sign me up</button>
						</div>
					</form>
				</div>
			</div>
			<!-- Facebook -->
			<div class="span4 fb-cta">
				<div class="cta-head">
					<h2 class="prompt-cta">
						Help us get <span class="purple">gigs</span>.
					</h2>
				</div>
				<div class="cta-action">
					<span class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></span>
					<p class="hide-on-small-max">Venues like bands with <a href="http://www.facebook.com/stompcat">many Facebook fans</a>. Plus, you'll get frequent behind-the-scene updates, upcoming show info, and Stompstories.</p>
				</div>
			</div>
			<!-- Twitter -->
			<div class="span4 twitter-cta">
				<div class="cta-head">
					<h2 class="prompt-cta">
						And <span class="purple">this</span> too.
					</h2>
				</div>
				<div class="cta-action">
					<a href="https://twitter.com/stompcat" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stompcat</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<p class="hide-on-small-max">We hear that it's all the rage with kids these days. And we figure more Stompcat is better than less Stompcat.</p>
				</div>
			</div>
		</div>
	</div>
</div>





<?php
get_footer();
?>