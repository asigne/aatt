<?php get_header(); ?>
<?php $ka_blogtitle = get_option('ka_blogtitle');
$ka_searchbar = get_option('ka_searchbar');
$ka_crumbs = get_option('ka_crumbs'); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
<div id="main">
    <div class="main-area">
      <div class="tools">
        <div class="holder">
          <div class="frame">
            <h1><?php echo $ka_blogtitle; ?></h1>
            <?php if ($ka_searchbar == "true"){load_template(TEMPLATEPATH . '/functions/content/searchform.php');} else {} ?>
            <?php if ($ka_crumbs == "true"){ $bc = new simple_breadcrumb;} else {} ?>
          </div><!-- end frame -->
        </div><!-- end holder -->
      </div><!-- end tools -->
    
    <div class="main-holder">			
      <div id="content" class="content_blog">
        <?php 
$ka_blogtitle = get_option('ka_blogtitle');
$ka_searchbar = get_option('ka_searchbar');
$ka_crumbs = get_option('ka_crumbs');
$ka_blogbutton = get_option('ka_blogbutton');
$ka_blogauthor = get_option('ka_blogauthor');
$ka_related_posts = get_option('ka_related_posts');
$ka_related_posts_title = get_option('ka_related_posts_title');
$ka_related_posts_count = get_option('ka_related_posts_count');
$ka_posted_by = get_option('ka_posted_by');
$ka_post_date = get_option('ka_post_date');
if ($ka_post_date != "false"){ $ka_post_date_result = 'style="background:none !important;"';}else{$ka_post_date_result = '';}
$ka_dragshare = get_option('ka_dragshare');
$blog_image_frame = get_option('ka_blog_image_frame');

if (have_posts()) : while (have_posts()) : the_post(); 
//retrieve all post meta of posts in the loop.
 
$linkpost = get_post_meta($post->ID, "_jcycle_url_value", $single = true);
$external_image_url = get_post_meta($post->ID,'truethemes_external_image_url',true);
$video_url = get_post_meta($post->ID,'truethemes_video_url',true);
$permalink = get_permalink($post->ID);
//prepare to get image
$thumb = get_post_thumbnail_id();
$image_width = 538;
$image_height = 218;

//use truethemes image croping script, function moved to functions/global/basic.php
$image_src = truethemes_crop_image($thumb,$external_image_url,$image_width,$image_height);
?>



<div class="single_blog_wrap">
<div class="post_title">
<h2><?php the_title(); ?></h2>
<?php if ($ka_posted_by != "true") {?><p class="posted-by-text"><span>Posted by:</span> <?php the_author_posts_link(); ?></p><?php }?>
</div><!-- end post_title -->


<div class="" <?php echo $ka_post_date_result; ?>>

<?php
//function to generate internal image, external image or video for content-blog.php, content-blog-single.php, and archive.php
//please find it in functions/global/basic.php

$html = truethemes_generate_blog_image($image_src,$image_width,$image_height,$blog_image_frame,$linkpost,$permalink,$video_url);

echo $html;
?>


<?php the_content(); ?>
<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>




<?php if ($ka_related_posts == "true"){ 
echo '<br class="clear" /><br class="clear" />';
echo do_shortcode("[related_posts_content limit=\"".$ka_related_posts_count."\" title=\"".$ka_related_posts_title."\"]"); 

}?>
</div><!-- end post_content -->



<div class="post_footer">
<div class="post_cats"><p><span>Categories:</span> <?php echo get_the_term_list( $post->ID, 'categoriespostteam', '', ', ', '' );?></p></div><!-- end post_cats -->

</div><!-- end post_footer -->




<?php if ($ka_blogauthor == "true"){ ?>
<div class="comment-wrap" id="about-author-wrap">
  <div class="comment-content">
  	<div class="comment-gravatar"><?php echo get_avatar(get_the_author_meta('email'),$size='80',$default=get_template_directory_uri().'/images/_global/default-grav.jpg' ); ?>
  	</div><!-- end comment-gravatar -->
  
  	<div class="comment-text">
    <p class="comment-author-about">About the Author</p>
    <?php the_author_meta('description'); ?>
    </div><!-- end comment-text -->
    
  </div><!-- end comment-content -->
</div><!-- end comment-wrap -->
<?php } else {} ?>
</div><!-- end single_blog_wrap -->



<?php comments_template('', true); ?>
<?php endwhile; else: ?>
<h2>Nothing Found</h2>
<p>Sorry, it appears there is no content in this section.</p>
<?php endif; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </div><!-- end content -->
          
    <div id="sidebar" class="sidebar_blog">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) : ?><?php endif; ?>
    </div><!-- end sidebar -->
    </div><!-- end main-holder -->
  </div><!-- main-area -->
<?php get_footer(); ?>