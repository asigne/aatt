<?php get_header(); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
    <div id="main">
<?php load_template(TEMPLATEPATH . '/functions/content/tools.php'); ?>

<div class="main-holder">
<div id="content" class="content_full_width">



<?php 
if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>