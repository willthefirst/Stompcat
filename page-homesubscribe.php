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

<div>
  <!-- Email -->
  <form action="http://stompcat.us7.list-manage.com/subscribe/post" method="POST"  target="_blank">
    <input type="hidden" name="u" value="a9647b6224323ceb07cf3ab54" />
    <input type="hidden" name="id" value="18f86f4bfb" />
    <div>
      <label for="MERGE0">Your Email:</label>
      <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Your Email" required/>
    </div>
    <div class="mobile-hide">
      <label for="MERGE1">First Name:</label>
      <input type="text" name="MERGE1" id="MERGE1" size="25" value="" pattern="^[\S]*$" oninvalid="setCustomValidity('We just need your first name.')" placeholder="Your First Name" />
    </div>
    <input type="submit" value="Submit" />
  </form>

  <!-- Facebook -->
  <div class="fb-like" data-href="http://www.facebook.com/stompcat" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana"></div>

  <!-- Twitter -->
  <a href="https://twitter.com/intent/follow?&screen_name=Stompcat">
    <div class="twitter">
      Test
    </div>
  </a>
</div>


<?php
get_footer();
?>