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
						Get the <a href="http://stompcat.us7.list-manage1.com/subscribe?u=a9647b6224323ceb07cf3ab54&id=18f86f4bfb" target="_blank" class="purple">Stompletter</a>.
					</h2>
				</div>
				<div class="cta-action">
					<form class="email-form" action="http://stompcat.us7.list-manage.com/subscribe/post" method="POST" target="_blank">
						<input type="hidden" name="u" value="a9647b6224323ceb07cf3ab54" />
						<input type="hidden" name="id" value="18f86f4bfb" />
						<div>
							<label for="MERGE1">First Name:</label>
							<input type="text" name="MERGE1" id="MERGE1" size="25" value="" pattern="^[\S]*$" oninvalid="setCustomValidity('We just need your first name.')" placeholder="Your first name" autofocus />
						</div>
						<div class="email-input-container">
							<label for="MERGE0">Your Email:</label>
							<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Your email" required/>
						</div>
						<div class="email-submit">
							<button class="button-custom button-large" style="width:100%" type="submit">Sign me up</button>
						</div>
						<p class="hide-on-small-max">We'll stomp you announcements about the big stuff: album releases, music videos, weddings, births, divorces, custody battles, etc. But seriously, we won't spam you.</p>
					</form>
				</div>
			</div>
			<!-- Facebook -->
			<div class="span4 fb-cta">
				<div class="cta-head">
					<h2 class="prompt-cta">
						Help us get <a href="http://www.facebook.com/stompcat" target="_blank" class="purple">gigs</a>.
					</h2>
				</div>
				<div class="cta-action">
					<span class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></span>
					<p class="hide-on-small-max"><a href="http://www.facebook.com/stompcat">Your public support</a> gets us shows even when our talent doesn't. You'll also be stomped with behind-the-scene updates, upcoming performance info, and other Stomportunities. Facebook hasn't added a Stomp button yet, but Mark Zuckerman told us that there's one coming.</p>
				</div>
			</div>
			<!-- Twitter -->
			<div class="span4 twitter-cta">
				<div class="cta-head">
					<h2 class="prompt-cta">
						And <a href="http://www.twitter.com/stompcat" target="_blank" class="purple">Stomptweets</a>, yo.
					</h2>
				</div>
				<div class="cta-action">
					<a href="https://twitter.com/stompcat" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @stompcat</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<p class="hide-on-small-max">Stomptweets will blow your mind. We post pictures of how we're feeling and mouthwatering explanatory text about food we're eating. <a href="https://twitter.com/search/realtime?q=%23stompcat&src=typd">#Stompcat</a> <a href="https://twitter.com/search/realtime?q=%23gritfunk&src=typd">#GritFunk</a></p>
				</div>
			</div>
		</div>
	</div>
</div>





<?php
get_footer();
?>