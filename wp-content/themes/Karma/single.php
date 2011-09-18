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
        <?php load_template(TEMPLATEPATH . '/functions/content/content-blog-single.php'); ?>  
      </div><!-- end content -->
          
    <div id="sidebar" class="sidebar_blog">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) : ?><?php endif; ?>
    </div><!-- end sidebar -->
    </div><!-- end main-holder -->
  </div><!-- main-area -->
<?php get_footer(); ?>