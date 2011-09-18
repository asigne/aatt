<?php
/*
Template Name: Contact (iPhone)
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
<div id="content" class="content_full_width contact_iphone_content">
<div class="two_thirds">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</div><!-- end two_thirds -->


<div class="one_third_last contact_iphone">
<div class="iphone-wrap">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contact Sidebar (iPhone)") ) : ?>

<div class="sidebar-widget sidebar-iphone"><h4 class="iphone-header">Follow us		</h4>		



<ul class="social_icons">
<li><a href="" onclick="window.open(this.href);return false;" class="rss">rss</a></li>
<li><a href="http://twitter.com/" class="twitter" onclick="window.open(this.href);return false;">Twitter</a></li>
<li><a href="http://www.facebook.com/" class="facebook" onclick="window.open(this.href);return false;">Facebook</a></li>
<li><a href="http://www.youtube.com/" class="youtube" onclick="window.open(this.href);return false;">YouTube</a></li>
</ul>
<br />


		</div><div class="sidebar-widget sidebar-iphone"><h4 class="iphone-header">Phone us</h4>			<div class="textwidget"><p>
<strong>Office:</strong> 1-800-555-6677<br />
<strong>Mobile:</strong> 012-345-6789</p>
</div>
		</div>
		

<?php endif; ?>
</div><!-- end iphone-wrap -->
</div><!-- end one_third_last -->
<br class="clear" />
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->



<?php get_footer(); ?>