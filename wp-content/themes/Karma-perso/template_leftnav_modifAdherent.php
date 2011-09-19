<?php
/*
Template Name: Left Nav ModifAdherent
*/
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
	if ($_SESSION['connecte'] == 1){
		if ($_SESSION['droits'] == 1){
			//retrieve value for sub-nav checkbox
			global $post;
			$post_id = $post->ID;
			$meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);
	
			if(empty($meta_value)){
				load_template(TEMPLATEPATH . '/functions/global/subnav-left-custom.php');
			}else{ ?>
				<div id="sub_nav">
				<ul class="sub-menu">
				<?php //generated_dynamic_sidebar(); 
			?>
			</ul>
			</div><!-- end sub_nav -->
	<?php } ?>		
			<div id="content">
			<?php 
			$query = mysql_query("SELECT * FROM kv_adherents a, kv_equipes e where e.idEquipe=a.idEquipe and a.idAdherent=".$_GET['id']);
			
			
			formulaireModification("administration/gestion-des-adherents/modifier-un-adherent/", $data, 1);	?>
			
			</div><!-- end content -->
<?php
		}
	}
?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>