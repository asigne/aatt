<?php
/*
Plugin Name: Wordpress Manual
Plugin URI: http://www.videousermanuals/
Description:  Wordpress Manual - A Complete video manual for your clients
Version: 1.3.2
Author: www.videousermanuals.com
Author URI: http://www.videousermanuals.com
*/

// WP Admin Menu
function wpm_add_pages() {
	 add_menu_page('Manual', 'Manual', 0, __FILE__, 'wpm_toplevel_page', plugins_url('video-user-manuals/images/vum-logo.png'));
	 add_submenu_page(__FILE__, 'Videos', 'Videos', 0, __FILE__, 'wpm_toplevel_page');
	 add_submenu_page(__FILE__, 'User Manual', 'User Manual', 0, 'online-manual', 'wpm_online_manual');   
	 $wpm_administration = add_submenu_page(__FILE__, 'Manual Options', 'Manual Options', 10, 'manual-options', 'wpm_admin');	 

	$wpm_help = "
	<style>
	ul.help_list {
		margin-top:10px;}
		
	ul.help_list li {
		list-style-type:disc;
		margin-left:20px;}
	</style>
		
	<p>For more details of how to use this plugin please refer to our FAQ section.  <a href=\"http://www.videousermanuals.com/faq/\">http://www.videousermanuals.com/faq/</a></p>
	
	<p>In order to use this plugin, you must have a serial number, which should have been emailed to you when you first subscribed to the plugin.</p>
	
	<p>If you have any issues with the plugin, please put in a support ticket: <a href=\"http://www.videousermanuals.com/support-desk/\">http://www.videousermanuals.com/support-desk/</a>.</p>
	
	<p style=\"font-size:9px; margin-bottom:10px;\">Icons: <a href=\"http://www.woothemes.com/2009/09/woofunction/\">WooFunction</a></p>	
	
	<p>Please note the links below are not actually related to this plugin (we could not figure out how to remove them. If anyone knows how to, please let us know!)</p>
	";
	
	add_contextual_help($wpm_administration, $wpm_help);

}
add_action('admin_menu', 'wpm_add_pages');

// Include Subpages
include('videos.php');
include('manual.php');
include('admin-page.php');
?>