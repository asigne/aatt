<?php
/*
Template Name: Right Nav Menu Custom
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
<div id="content">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->

<?php  
//retrieve value for sub-nav checkbox
global $post;
$post_id = $post->ID;
$meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);

if(empty($meta_value)){
load_template(TEMPLATEPATH . '/functions/global/subnav-right-menu-custom.php');
}else{ ?>

<div id="sub_nav"  class="nav_right_sub_nav">
<ul class="sub-menu">
<?php generated_dynamic_sidebar(); ?>
</ul>
</div><!-- end sub_nav -->
<?php } ?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>