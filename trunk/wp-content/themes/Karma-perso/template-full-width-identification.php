<?php
/*
Template Name: Full Width Identification
*/
?>
<?php
  //   session_start();
?>
<?php get_header(); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
    <div id="main">
<?php load_template(TEMPLATEPATH . '/functions/content/tools.php'); ?>

<div class="main-holder">
<?php  
//retrieve value for sub-nav checkbox
global $post;
$post_id = $post->ID;
$meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);

if(empty($meta_value)){
load_template(TEMPLATEPATH . '/functions/global/subnav-horizontal.php');}else{
// do nothing
}
?>
<div id="content" class="content_full_width">

<?php
	if ($_SESSION['connecte'] == 0){
?>
		<form action="http://localhost:8888/wordpressKevin/espace-adherent/" method="post">
			<table>
				<tr>
					<td><label>Identifiant :</label></td>
					<td><input type="text" name="identifiant" /></td>
				</tr>
				<tr>
					<td><label>Mot de pass :</label>
					<td><input type="password" name="pass"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Se connecter" /></td>
				</tr>
			</table>	
		</form>
<?php
	}
?>	

</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>