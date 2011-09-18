<?php
/*
Template Name: Homepage :: Full Width
*/
?>
<?php get_header(); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
    <div id="main">

<div class="main-area home-main-area">
<div class="main-holder home-holder">
<div class="content_full_width">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>