<?php
/*
Template Name: Left Sidebar postteam
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
//retrieve value for sub-nav checkbox
global $post;
$post_id = $post->ID;
$meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);

if(empty($meta_value)){
load_template(TEMPLATEPATH . '/functions/global/subnav-horizontal.php');}else{
// do nothing
}
?>

<div id="content" class="content_left_sidebar">
	
<?php 
	query_posts(array('post_type'=>'Postteam', 'paged'=>get_query_var("paged")));
	if(have_posts()) : 
		while(have_posts()) : 
			the_post();
?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</br>			
				<p class="posted-by-text"><?php the_time('j'); ?><?php echo strtoupper(get_the_time('M')); ?><span>, by </span> <?php the_author_posts_link(); ?>
				</br><span>Categories:</span> <?php echo get_the_term_list( $post->ID, 'categoriespostteam', '', ', ', '' );?></p>
			<?php limit_content(80,  true, ''); ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><span>Read more</span></a></br></br>
<?php			
		endwhile; 
		posts_nav_link();
	endif; 
?>

</div><!-- end content -->

<div id="sidebar" class="left_sidebar">
<?php generated_dynamic_sidebar(); ?>
</div><!-- end sidebar -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>