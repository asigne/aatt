<?php
	/* ------------------------------------
	***********************************
	
	Manual Page Content
	
	***********************************
	------------------------------------ */

	function wpm_online_manual() {
		include 'config.php';

		// URL Variables
		$wpm_urlvars = "wp_version:'".get_bloginfo('version')."', user_id:'".get_option('wpm_o_user_id')."',custom_ebook_img:'".get_option('wpm_o_custom_ebook_img')."'";
		
?>
	<div id="manual-page" class="wrap"><div class="icon32" id="icon-manual" style="<?php echo get_option('wpm_o_plugin_heading_css'); ?>"><br/></div><h2><?php echo get_option('wpm_o_plugin_heading_user'); ?></h2>
    <div id="ajax_msg"></div>
	<div id="ajax_content"></div>
	<script type="text/javascript"> 
			jQuery.getJSON('<?php echo $wpm_url; ?>/online-manual.php?jsoncallback=?',
				{<?php echo $wpm_urlvars;?>},
				function(data, textStatus){
					jQuery('#ajax_content').append(data);
				});

	</script>
<?php
}
?>