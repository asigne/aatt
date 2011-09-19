<?php
/*
Template Name: Left Sidebar Secure
*/
?>
<?php
    session_start();
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
/*	$_SESSION['test']


$test="Stroumphette";
$_SESSION['test'] = $test;
echo $_SESSION['test'];

echo "a".$_POST['pass'];
*/
?>

<div id="content" class="content_left_sidebar">
<?php
	if ($_SESSION['connecte'] == 0){
		if(isset($_POST['identifiant'], $_POST['pass']) && $_POST['identifiant'] != NULL && $_POST['pass'] != NULL) {
			if($_POST['pass']=="abc"){
				$_SESSION['connecte'] = 1;
				//echo "Bienvenue dans l'espace réservé aux adhérents";	
?>			

<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->

<div id="sidebar" class="left_sidebar">
<?php generated_dynamic_sidebar(); ?>
</div><!-- end sidebar -->
<?php
			}
			else{
				echo "<span id=\"erreur\">Echec de la connexion : Login ou mot de pass érroné<span>";	
			}
		}
		else{
			echo "<span id=\"erreur\">Vous avez oublié un champ<span>";
		}
	}
	else{
?>	
		<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
		</div><!-- end content -->
		<div id="sidebar" class="left_sidebar">
		<?php generated_dynamic_sidebar(); ?>
		</div><!-- end sidebar -->
<?php
	}
?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>