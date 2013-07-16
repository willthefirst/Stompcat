<?php

// Template Name: Facebook Like

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>

<?php
// For the loop used, look in /loops
cfct_loop();
?>

<?php
get_footer();
?>