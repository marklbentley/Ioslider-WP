<?php
/*
Plugin Name: ioslider
Plugin URI: http://www.marklbentley.co.uk/ioslider 
Description: Implementation of ioslider jQuery plugin
Version: 1.0 
Author: Mark Bentley
Author URI: http://marklbentley.co.uk/ 
License: Creative Commons Attribution-ShareAlike 
 
//Other terms and conditions
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
*/


//create and populate options on activation
register_activation_hook( __FILE__, 'ioslider_activate' );
function ioslider_activate(){
add_option('ioslider_large_ids', 'ioslider_large');
add_option('ioslider_medium_ids', 'ioslider_medium');
add_option('ioslider_small_ids', 'ioslider_small');
}

//remove options on deactivation
register_deactivation_hook( __FILE__, 'ioslider_deactivate' );
function ioslider_deactivate(){
delete_option('ioslider_large_ids');
delete_option('ioslider_medium_ids');
delete_option('ioslider_small_ids');
}

//Add the stylesheets in the header
wp_enqueue_style(
	"jquery.ioslider", 
	WP_PLUGIN_URL."/ioslider/css/iPhoneSkin.css", 
	false, 
	"1.0"
);
wp_enqueue_style(
	"jquery.ioslider", 
	WP_PLUGIN_URL."/ioslider/css/iPhoneSkinMedium.css", 
	false, 
	"1.0"
);
wp_enqueue_style(
	"jquery.ioslider", 
	WP_PLUGIN_URL."/ioslider/css/iPhoneSkinSmall.css", 
	false, 
	"1.0"
);

//Add the scripts in the footer
wp_enqueue_script("jquery");
//jQuery UI
wp_enqueue_script(
  "jquery.ui", "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js", 
  array("jquery"), "1.8.9",1);
//ioslider plugin
wp_enqueue_script(
  "jquery.ioslider", WP_PLUGIN_URL."/ioslider/js/jquery.ioslider.js", 
  array("jquery"), "1.0",1);
//Mouse touch for smart phone compatibility
wp_enqueue_script(
  "jquery.ui.mouse.touch", WP_PLUGIN_URL."/ioslider/js/jquery.ui.mouse.touch.js", 
  array("jquery"), "",1);
//Setup the plugin
wp_enqueue_script(
  "jquery.iosliderSetup", WP_PLUGIN_URL."/ioslider/js/iosliderSetup.js", 
  array("jquery.ioslider"), "1.0",1);  
 
 //Create options page
  function ioslider_admin() {  
    include('ioslider_options.php');  
}
 function ioslider_admin_options(){
 add_options_page("ioslider", "ioslider", 1, "ioslider", "ioslider_admin");
 }
 add_action('admin_menu', 'ioslider_admin_options');

  ?>