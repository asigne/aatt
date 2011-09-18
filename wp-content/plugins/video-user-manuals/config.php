<?php
/* ------------------------------------
	***********************************
	
	Configuration Values
	
	***********************************
------------------------------------ */

// Serial
$wpm_user_id = "";

/* -----------------------------------------------
	ONLY EDIT BELOW IF YOU KNOW WHAT YOU'RE DOING!
------------------------------------------------- */

// Branding URL
// Please use the absolute URL
// Please make sure image is no higher than 30px
// Please make sure you add http://
$wpm_branding_img	= 'http://vum.s3.amazonaws.com/wp/assets/vum-logo.gif';

// Video Sections (true/false)
$wpm_show_dashboard = 1;
$wpm_show_editor = 1;
$wpm_show_images = 1;
$wpm_show_pages = 1;
$wpm_show_media = 1;
$wpm_show_posts = 1;
$wpm_show_comments = 1;
$wpm_show_links = 1;
$wpm_show_profile = 1;

// Plugin Heading
$wpm_plugin_heading_video = 'Manual';
$wpm_plugin_heading_user = 'User Manual';
$wpm_plugin_heading_css = 'background:transparent url(../../wp-content/plugins/video-user-manuals/images/vum-logo-32.png) left top no-repeat';

// Intro Text
$wpm_intro_text = 'Hi, welcome to your new website! The following are some quick video tutorials which will help you get started. If you want to read the manual for some more in depth explanations on how your content management system works click <a href="admin.php?page=online-manual">here</a>.';

// Video Title
$wpm_video_title = "Wordpress Video Tutorials";

// custom eBook image
$wpm_custom_ebook_img = '';

// Show Your Own Videos? (true/false)
$wpm_show_local = 0;

	// If not false, enter the details
	// custom video width and height
	$wpm_local_video_height = 667;
	$wpm_local_video_width = 960;
	$wpm_local_title = 'Introduction Videos';
	// video player
	// if you are using jing, then set to 1. All other video types (mp4,flv,mov) set to false.
	$wpm_local_player = 0;

	$wpm_localvideos = '';
	// Array of local videos
	// [0] name
	// [1] thumbnail-small
	// [2] video url (including http://
	// [3] alt text explination
	// [4] thumbnail-large (leave blank if you do not have one)
	$wpm_localvideos[0][0] = 'Sample 1';
	$wpm_localvideos[0][1] = 'http://vum.s3.amazonaws.com/wp/assets/sample-thumb-1.jpg';
	$wpm_localvideos[0][2] = 'http://vum.s3.amazonaws.com/wp/assets/samples/image-editor-crop-and-scale.mov';
	$wpm_localvideos[0][3] = 'Sample 1 - Description';
	$wpm_localvideos[0][4] = 'http://vum.s3.amazonaws.com/wp/assets/samples/image-editor-crop-and-scale.jpg';

	// For Example
	/*
	$wpm_localvideos[1][0] = 'Sample 2';
	$wpm_localvideos[1][1] = 'http://vum.s3.amazonaws.com/wp/assets/sample-thumb-2.jpg';
	$wpm_localvideos[1][2] = 'http://vum.s3.amazonaws.com/wp/assets/samples/oembed.mov';
	$wpm_localvideos[1][3] = 'Sample 2 - Description';
	$wpm_localvideos[1][4] = 'http://vum.s3.amazonaws.com/wp/assets/samples/oembed.jpg';

	$wpm_localvideos[2][0] = 'Sample 3';
	$wpm_localvideos[2][1] = 'http://vum.s3.amazonaws.com/wp/assets/sample-thumb-3.jpg';
	$wpm_localvideos[2][2] = 'http://vum.s3.amazonaws.com/wp/assets/samples/the-toolbar.mov';
	$wpm_localvideos[2][3] = 'Sample 3 - Description';
	$wpm_localvideos[2][4] = 'http://vum.s3.amazonaws.com/wp/assets/samples/the-toolbar.jpg';
	*/

// Built In Videos URL - DO NOT EDIT
$wpm_url = "http://wordpress.videousermanuals.com";
$wpm_plugin_version = '1.3';
?>