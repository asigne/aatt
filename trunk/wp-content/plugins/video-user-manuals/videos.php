<?php
	/* ------------------------------------
	***********************************
	
	Video Page Content
	
	***********************************
	------------------------------------ */

	function wpm_toplevel_page() {
		include 'config.php';

		// URL Variables
		$wpm_urlvars = "wp_version:'".get_bloginfo('version')."', user_id:'".get_option('wpm_o_user_id')."'";

		// Branding
		if (get_option('wpm_o_branding_img') != '') {
			$wpm_urlvars .= ",branding_img:'".get_option('wpm_o_branding_img')."'";	
		}
		
		// Videos: Getting Started
		if (get_option('wpm_o_show_dashboard')) { 
			$wpm_urlvars .= ",show_dashboard:1,"; 
		} else {
			$wpm_urlvars .= ",show_dashboard:0,"; 	
		}
		
		// Videos: Editor
		if (get_option('wpm_o_show_editor')) {
			$wpm_urlvars .= "show_editor:1,";
		} else {
			$wpm_urlvars .= "show_editor:0,";	
		}
		
		// Videos: Images
		if (get_option('wpm_o_show_images')) {
			$wpm_urlvars .= "show_images:1,";
		} else {
			$wpm_urlvars .= "show_images:0,";	
		}

		// Videos: Pages
		if (get_option('wpm_o_show_pages')) {
			$wpm_urlvars .= "show_pages:1,";
		} else {
			$wpm_urlvars .= "show_pages:0,";	
		}
		
		// Videos: Media
		if (get_option('wpm_o_show_media')) {
			$wpm_urlvars .= "show_media:1,";
		} else {
			$wpm_urlvars .= "show_media:0,";	
		}
		
		// Videos: Appearance
		if (get_option('wpm_o_show_appearance')) {
			$wpm_urlvars .= "show_appearance:1,";
		} else {
			$wpm_urlvars .= "show_appearance:0,";	
		}

		// Videos: Posts
		if (get_option('wpm_o_show_posts')) {
			$wpm_urlvars .= "show_posts:1,";
		} else {
			$wpm_urlvars .= "show_posts:0,";	
		}

		// Videos: Commments
		if (get_option('wpm_o_show_comments')) {
			$wpm_urlvars .= "show_comments:1,";
		} else {
			$wpm_urlvars .= "show_comments:0,";	
		}

		// Videos: Links
		if (get_option('wpm_o_show_links')) {
			$wpm_urlvars .= "show_links:1,";
		} else {
			$wpm_urlvars .= "show_links:0,";	
		}

		// Videos: Profile
		if (get_option('wpm_o_show_profile')) {
			$wpm_urlvars .= "show_profile:1,";
		} else {
			$wpm_urlvars .= "show_profile:0,";	
		}
		
		//plugin version
		$wpm_urlvars .= 'plugin_version:'.$wpm_plugin_version;

		if (get_option('wpm_o_custom_video_title')) {
			$wpm_urlvars .= ",video_title:'" . get_option('wpm_o_custom_video_title') . "'";
		} else {
			$wpm_urlvars .= ",video_title:'".$wpm_video_title ."'";	
		}
				
		// Plugin Heading
		echo '<div id="manual-page" class="wrap"><div class="icon32" id="icon-manual" style="' . get_option('wpm_o_plugin_heading_css') . '"><br/></div><h2 style="padding-bottom: 10px;">' . get_option('wpm_o_plugin_heading_video') . '</h2>';

		// Intro Text
		if(get_option('wpm_o_intro_text') != '') {
			echo stripslashes(get_option('wpm_o_intro_text'));
		}

		// Title
		if (get_option('wpm_o_local_title') == '') {
			$wpm_local_title = 'Videos';
		} else {
			$wpm_local_title = stripslashes(get_option('wpm_o_local_title'));
		}

		// If Local Videos
		if (get_option('wpm_o_show_local')) {	
		
			if (get_option('wpm_o_local_player')) {
				$wpm_custom_flash = 'flash';
			} else {
				$wpm_custom_flash = 'custom';
			}
		
		?>

		<h2><?php echo $wpm_local_title; ?></h2>
		<?php
			for ($x=1;$x<=10;$x++){
				if(get_option('wpm_o_localvideos_'.$x.'_0') != ''){
					echo '<div class="video-container">';
		?>
				<a href="javascript:void(0)" onclick="window.open('<?php echo $wpm_url; ?>/video-player.php?<?php echo $wpm_urlvarshtml; ?>&video_url=<?php echo get_option('wpm_o_localvideos_'.$x.'_2'); ?>&custom_height=<?php echo get_option('wpm_o_local_video_height'); ?>&custom_width=<?php echo get_option('wpm_o_local_video_width'); ?>&branding_img=<?php echo get_option('wpm_o_branding_img'); ?>&player=<?php echo $wpm_custom_flash; ?>&video_thumb=<?php echo get_option('wpm_o_localvideos_'.$x.'_4'); ?>','welcome','width=<?php echo get_option('wpm_o_local_video_width'); ?>,height=<?php echo (get_option('wpm_o_local_video_height') + 50); ?>,menubar=0,status=0,location=0,toolbar=0,scrollbars=0')"><img src="<?php echo get_option('wpm_o_localvideos_'.$x.'_1');; ?>" alt="<?php echo get_option('wpm_o_localvideos_'.$x.'_3'); ?>" title="<?php echo get_option('wpm_o_localvideos_'.$x.'_3'); ?>"></a>
				<br />
				<a href="javascript:void(0)" onclick="window.open('<?php echo $wpm_url; ?>/video-player.php?<?php echo $wpm_urlvarshtml; ?>&video_url=<?php echo get_option('wpm_o_localvideos_'.$x.'_2'); ?>&custom_height=<?php echo get_option('wpm_o_local_video_height'); ?>&custom_width=<?php echo get_option('wpm_o_local_video_width'); ?>&branding_img=<?php echo get_option('wpm_o_branding_img'); ?>&player=<?php echo $wpm_custom_flash; ?>&video_thumb=<?php echo get_option('wpm_o_localvideos_'.$x.'_4'); ?>','welcome','width=<?php echo get_option('wpm_o_local_video_width'); ?>,height=<?php echo (get_option('wpm_o_local_video_height') + 50); ?>,menubar=0,status=0,location=0,toolbar=0,scrollbars=0')"><?php echo get_option('wpm_o_localvideos_'.$x.'_0'); ?></a>
			<?php
					echo '</div>';
				}	
			}
			echo '<div style="clear:both;"> </div>';
		}
		?>
		
		<div id="ajax_msg"></div>
		<div id="ajax_content"></div>
		<script type="text/javascript">
				jQuery.getJSON('<?php echo $wpm_url; ?>/iframe.php?jsoncallback=?',
					{<?php echo $wpm_urlvars;?>},
					function(data, textStatus){
						jQuery('#ajax_content').append(data);
					});

		</script>
<?php
	}
?>