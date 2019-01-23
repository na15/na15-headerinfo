<?php
/*
Plugin Name: na15 Headerinfo
Author: nullacht15 GmbH
Version: 1.0
Author URI: https://www.nullacht15.com
*/

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
	exit;
}


function na15_insertHeaderInfo() {
  echo '<!--
	Internetagentur nullacht15 GmbH, Heidelberg . www.nullacht15.com
	-->' . "\n";
}
add_action('wp_head', 'na15_insertHeaderInfo', 0, 0);