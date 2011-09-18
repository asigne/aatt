<?php

include 'config.php';

$wpmThemeName = "Video User Manuals";
$wpwShortName = "wpm_o";

$wpmOptions = array (
 
array( "name" => $wpmThemeName." Options",
	"type" => "title"),
 

array( "name" => "Admin",
	"type" => "section"),
array( "type" => "open"),
 
array( "name" => "Serial",
	"desc" => "Enter the serial that was emailed to you",
	"id" => $wpwShortName."_user_id",
	"type" => "password",
	"std" => $wpm_user_id),
	
array( "name" => "Show Dashboard Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_dashboard",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_dashboard),
	
array( "name" => "Show Editor Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_editor",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_editor ),

array( "name" => "Show Image Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_images",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_images ),	

array( "name" => "Show Pages Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_pages",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_pages ),	

array( "name" => "Show Media Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_media",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_media ),	

array( "name" => "Show Posts Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_posts",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_posts ),	

array( "name" => "Show Comments Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_comments",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_comments ),	

array( "name" => "Show Links Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_links",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_links ),
	
array( "name" => "Show Profile Videos",
	"desc" => "Unchecking the box will hide this set of videos",
	"id" => $wpwShortName."_show_profile",
	"type" => "radio",
	"options" => array("1", "0"),
	"std" => $wpm_show_profile ),		
	
array( "type" => "close"),
array( "name" => "Branding & Customization",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Custom Logo",
	"desc" => "Enter the url to your logo. Should be no higher than 30px. Please include the http://",
	"id" => $wpwShortName."_branding_img",
	"type" => "text",
	"std" => $wpm_branding_img),

array( "name" => "Custom Plugin Heading",
	"desc" => "Change the heading of the plugin from '".$wpm_plugin_heading_video."' to what you want.",
	"id" => $wpwShortName."_plugin_heading_video",
	"type" => "text",
	"std" => $wpm_plugin_heading_video),

array( "name" => "Custom User Manual Heading",
	"desc" => "Change the heading of the plugin from '". $wpm_plugin_heading_user ."' to what you want.",
	"id" => $wpwShortName."_plugin_heading_user",
	"type" => "text",
	"std" => $wpm_plugin_heading_user),	
	
array( "name" => "Custom Plugin Heading Logo",
	"desc" => "Change the heading logo of the plugin. Only change if you know css!",
	"id" => $wpwShortName."_plugin_heading_css",
	"type" => "text",
	"std" => $wpm_plugin_heading_css),	

array( "name" => "Custom Introduction Text",
	"desc" => "Change the introduction text for your clients if you want.",
	"id" => $wpwShortName."_intro_text",
	"type" => "textarea",
	"std" => $wpm_intro_text),		

array( "name" => "Custom Ebook Image",
	"desc" => "Change the ebook image. Please put in the full url including http://",
	"id" => $wpwShortName."_custom_ebook_img",
	"type" => "text",
	"std" => $wpm_custom_ebook_img),		

array( "name" => "Custom Video Title",
	"desc" => "Change the title which introduces the videos",
	"id" => $wpwShortName."_custom_video_title",
	"type" => "text",
	"std" => $wpm_video_title),	

array( "type" => "close"),

array( "name" => "Your Local Videos",
	"type" => "section"),
array( "type" => "open"),

	array( "name" => "Show Local Videos",
		"desc" => "WARNING: Please follow the instructions below carefully.",
		"id" => $wpwShortName."_show_local",
		"type" => "radio",
		"options" => array("1", "0"),
		"std" => $wpm_show_local ),	

	array( "name" => "Video Variables",
		"type" => "subsectionvars"),

	array( "name" => "Title For Your All Your Videos",
		"desc" => "Title to appear above all your videos",
		"id" => $wpwShortName."_local_title",
		"type" => "textlocalvideo",
		"std" => $wpm_local_title),	

	array( "name" => "Use Your Own Video Player",
		"desc" => "If you are using Jing then set to yes. If set to no it will use the standard video player which handles these video formats: mp4,flv,mov",
		"id" => $wpwShortName."_local_player",
		"type" => "radio",
		"options" => array("1", "0"),
		"std" => $wpm_local_player ),	

	array( "name" => "Your Video Height",
		"desc" => "Height of your videos. Only have a number, do not include px.",
		"id" => $wpwShortName."_local_video_height",
		"type" => "textlocalvideo",
		"std" => $wpm_local_video_height),		

	array( "name" => "Your Video Width",
		"desc" => "Width of your videos. Only have a number, do not include px.",
		"id" => $wpwShortName."_local_video_width",
		"type" => "textlocalvideolast",
		"std" => $wpm_local_video_width),		

	array( "name" => "1st VIDEO",
		"type" => "subsection"),
		
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_1_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[0][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_1_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[0][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_1_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[0][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_1_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[0][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_1_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[0][4] ),			

	array( "name" => "2nd VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_2_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[1][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_2_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[1][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_2_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[1][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_2_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[1][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_2_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[1][4] ),		

	array( "name" => "3rd VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_3_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[2][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_3_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[2][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_3_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[2][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_3_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[2][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_3_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[2][4] ),		

	array( "name" => "4th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_4_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[3][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_4_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[3][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_4_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[3][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_4_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[3][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_4_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[3][4] ),		

	array( "name" => "5th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_5_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[4][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_5_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[4][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_5_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[4][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_5_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[4][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_5_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[4][4] ),		

	array( "name" => "6th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_6_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[5][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_6_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[5][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_6_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[5][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_6_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[5][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_6_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[5][4] ),		

	array( "name" => "7th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_7_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[6][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_7_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[6][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_7_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[6][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_7_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[6][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_7_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[6][4] ),		

	array( "name" => "8th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_8_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[7][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_8_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[7][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_8_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[7][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_8_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[7][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_8_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[7][4] ),		

	array( "name" => "9th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_9_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[8][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_9_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[8][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_9_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[8][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_9_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[8][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_9_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[8][4] ),		

	array( "name" => "10th VIDEO",
		"type" => "subsection"),
	
	array( "name" => "Your Video Name",
		"desc" => "The Name of Your Video",
		"id" => $wpwShortName."_localvideos_10_0",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[9][0] ),	

	array( "name" => "Small Video Thumbnail",
		"desc" => "The full URL of the small video thumbnail. 240px x 150px. Please include http://",
		"id" => $wpwShortName."_localvideos_10_1",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[9][1] ),			

	array( "name" => "Video URL",
		"desc" => "The full URL of the video. Please include http://",
		"id" => $wpwShortName."_localvideos_10_2",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[9][2] ),			

	array( "name" => "Description Of Video",
		"desc" => "The description will appear as alt text for the thumbnail",
		"id" => $wpwShortName."_localvideos_10_3",
		"type" => "textlocalvideo",
		"std" => $wpm_localvideos[9][3] ),			

	array( "name" => "Large Thumbnail Image",
		"desc" => "Large Thumbnail image for video. Should same size as video. Please include http://",
		"id" => $wpwShortName."_localvideos_10_4",
		"type" => "textlocalvideolast",
		"std" => $wpm_localvideos[9][4] ),		

array( "type" => "close")
);


function wpm_add_admin() {
 
global $wpmThemeName, $wpwShortName, $wpmOptions;


// setup options for first time
foreach ($wpmOptions as $value) {
		if ($value['id'] != '') {
			add_option( $value['id'], $value['std']  );
		}
}
 
 
if ( $_GET['page'] == 'manual-options') {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($wpmOptions as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($wpmOptions as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=manual-options&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($wpmOptions as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=manual-options&reset=true");
die;
 
}
}

}

function wpm_add_init() {

wp_enqueue_style('video-user-manuals', plugins_url('video-user-manuals/css/style.css'), false, '1.0', 'all');
wp_enqueue_script("wpm_script", plugins_url('video-user-manuals/scripts/wpm_script.js'), false, "1.0");

}
function wpm_admin() {
 
global $wpmThemeName, $wpwShortName, $wpmOptions;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$wpmThemeName.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$wpmThemeName.' settings reset.</strong></p></div>';
 
?>
<div class="wrap wpm_wrap">
<h2><?php echo $wpmThemeName; ?> Settings</h2>
 
<div class="wpm_opts">
<form method="post">
<?php foreach ($wpmOptions as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>
<p>To edit the Video User Manual settings, please use the menus below.  For help, please refer to the help dropdown above.</p>

 
<?php break;
 
case 'text':
?>

<div class="wpm_input wpm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
 
 <?php break;
 case 'password':
?>

<div class="wpm_input wpm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
 
 <?php break;
 case 'textlocalvideo':
?>

<div class="wpm_input_local_video wpm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>

 <?php break;
 case 'textlocalvideolast':
?>

<div class="wpm_input_local_video_last wpm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
 </div><!-- end of subsection -->
 
<?php
break;
 
case 'textarea':
?>

<div class="wpm_input wpm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="wpm_input wpm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 case "checkbox":
?>

<div class="wpm_input wpm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "radio":
?>

<div class="wpm_input wpm_radio" <?php if($value['id'] == 'wpm_o_show_local') { echo ' id="form-show-local-videos" '; }?> >
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

<?php 
$counter = 1;
foreach ($value['options'] as $option) { ?>
	<?php if(get_option($value['id']) ==  $option){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
	<label class="radioyesno"><?php if ($counter == 1) { echo 'yes'; } else { echo 'no'; } ?><input type="radio" name="<?php echo $value['id']; ?>" class="<?php echo $value['id']; ?>" value="<?php echo $option; ?>" <?php echo $checked; ?> /></label>
<?php
$counter++;
}
?>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="wpm_section">
<div class="wpm_title"><h3><img src="<?php bloginfo('wpurl')?>/wp-content/plugins/video-user-manuals/images/trans.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="wpm_options" style="display: none;">

 
<?php break;
case "subsection":
?>
<div id="v<?php echo str_replace(" ", "", $value['name']); ?>" class="video-h">
<h4><?php echo $value['name']; ?> <span class="submit"><input type="submit" value="clear" onclick="clearvid('v<?php echo str_replace(" ", "", $value['name']); ?>');return false;" /></span></h4>
<div class="clearfix"></div>


<?php break;
case "subsectionvars":
?>
<div id="v<?php echo str_replace(" ", "", $value['name']); ?>" class="video-h">
<h4><?php echo $value['name']; ?></h4>
<div class="clearfix"></div>
 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'wpm_add_init');
add_action('admin_menu', 'wpm_add_admin');
?>