<?php
/*
Template Name: Slider
*/
?>
<?php 

wp_enqueue_script("pop","/wp-content/themes/Karma-perso/lib/jquery.popeye-2.1.js");
wp_enqueue_script("popa","/wp-content/themes/Karma-perso/lib/jquery.popeye-2.1.min.js");
wp_enqueue_style("popb","/wp-content/themes/Karma-perso/css/jquery.popeye.css");
wp_enqueue_style("popc","/wp-content/themes/Karma-perso/css/jquery.popeye.style.css");
wp_enqueue_style("popd","/wp-content/themes/Karma-perso/css/site.css");

get_header(); ?>
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


<div class="example">
        <div class="ppy" id="ppy2">
        	
            <ul class="ppy-imglist">
           		<?php 
           			//echo' <li><a href="http://farm2.static.flickr.com/1428/1387537684_c1ce69e15a.jpg"><img src="http://farm2.static.flickr.com/1428/1387537684_c1ce69e15a_m.jpg" alt="yankee stadium shot by flickr member andre stoeriko" /></a></li>
               		// <li><a href="http://farm1.static.flickr.com/243/516200107_08d8e90a7f.jpg"><img src="http://farm1.static.flickr.com/243/516200107_08d8e90a7f_m.jpg" alt="Up There, shot by flickr member Nils Geylen" /></a></li>';
               
           		
           			query_posts(array('post_type'=>'Postteam'));
           			if (have_posts()) : 
           				while (have_posts()) : 
           					the_post();
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
							
							echo '<li><a href="'.$external_image_url.'"><img src="'.$image.'" /></a></li>';
						endwhile; 
					endif;
					//wp_reset_query();
				?>
            </ul>
            <div class="ppy-outer">
                <div class="ppy-stage">
                    <div class="ppy-counter">
                        <strong class="ppy-current"></strong> / <strong class="ppy-total"></strong> 
                    </div>
                </div>
                <div class="ppy-nav">
                    <div class="nav-wrap">
                        <a class="ppy-next" title="Next image">Next image</a>
                        <a class="ppy-prev" title="Previous image">Previous image</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>


