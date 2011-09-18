<?php get_header(); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
    <div id="main">
<?php
$ka_404title = get_option('ka_404title');
$ka_404message = get_option('ka_404message');
$ka_404sitemap = get_option('ka_404sitemap');
$ka_searchbar = get_option('ka_searchbar');
$ka_crumbs = get_option('ka_crumbs');
?>
<div class="main-area">
<div class="tools">
<div class="holder">
<div class="frame">
<h1><?php echo $ka_404title; ?></h1>
<?php if ($ka_searchbar == "true"){load_template(TEMPLATEPATH . '/functions/content/searchform.php');} else {} ?>
<?php if ($ka_crumbs == "true"){ $bc = new simple_breadcrumb;} else {} ?>
</div><!-- end frame -->
</div><!-- end holder -->
</div><!-- end tools -->



<div class="main-holder">
<div id="content" class="content_full_width">
<div class="four_error">
<div class="four_message">
<h1 class="four_o_four"><?php echo $ka_404title;?></h1>
<?php echo $ka_404message;?>
</div><!-- end four_message -->
</div><!-- end four_error -->

</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->



<?php get_footer(); ?>