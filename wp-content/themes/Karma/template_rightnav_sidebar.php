<?php
/*
Template Name: Right Nav + Sidebar 
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
<div id="sidebar" class="left_sidebar">
<?php generated_dynamic_sidebar(); ?>
</div><!-- end sidebar -->

<div id="content" class="content_sidebar content_right_sidebar">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->

<?php load_template(TEMPLATEPATH . '/functions/global/subnav-right.php'); ?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>