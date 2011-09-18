<?php
/*
Template Name: Homepage :: jQuery
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
<div class="home-bnr-jquery">
<ul>
<?php

//remove filter added by wploop_exclude() from functions/global/theme_functions.php
remove_filter('pre_get_posts','wploop_exclude');

//Get jQuery slider post category set by user in admin Site Options.
$jcycle_category = get_option('ka_jcycle_category');
$jcycle_category_id = get_cat_id($jcycle_category);

//start WordPress Loop to retrieve post from selected category,
//if no category is set, all posts will be returned.

$query_string ="posts_per_page=100&cat=$jcycle_category_id";
query_posts($query_string);

if (have_posts()) : while (have_posts()) : the_post();

//process all individual post meta.

//post meta - Link This Image 
$jcycle_url = get_post_meta($post->ID, '_jcycle_url_value', true);

//post meta - Feature Image (External Source)
$external_image_url = get_post_meta($post->ID,'truethemes_external_image_url',true);

//post meta - Feature Image
$thumb = get_post_thumbnail_id();

//half width image details
$image_width = 404;
$image_height = 256;

//assign half image src, uses function from functions/global/basic.php
$image = truethemes_crop_image($thumb,$external_image_url,$image_width,$image_height);


?>
<li class="jqslider">
<?php if (!empty($image)) : ?>
  <div class="home-banner-main">
<?php $home_title = the_title('','',false);if ($home_title != ""){echo '<h2>'.$home_title.'</h2>';} ?>
    <?php the_content(); ?>
  </div><!-- end home-banner-main -->
  <div class="home-banner-sub">
    <div class="home-banner-sub-content">
    <?php if ($jcycle_url == ''){ ?>
    <img src="<?php echo $image; ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" alt="<?php the_title(); ?>" />
    <?php }else{
    echo '<a href="'.$jcycle_url.'">'; ?>
	<img src="<?php echo $image; ?>" width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" alt="<?php the_title(); ?>" />
    <?php echo '</a>'; }?>
    <div class="home-banner-bottom">&nbsp;</div>
    </div><!-- end home-banner-sub-content -->
  </div><!-- end home-banner-sub -->
	</li>
<?php else : ?>

<div class="home-banner-sub-full">
<?php the_content(); ?>
</div><!-- end home-banner-sub-full -->
</li>
<?php endif;endwhile; endif;wp_reset_query(); ?>
</ul>
</div><!-- end home-bnr-jquery -->




<div class="home-jquery-content">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end home-jquery-content -->
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->


<?php get_footer(); ?>