<div id="footer">
<?php
add_filter('pre_get_posts','wploop_exclude');
$footer_layout = get_option('ka_footer_layout');
$ka_footer_columns = get_option('ka_footer_columns');
$ka_scrolltoplink = get_option('ka_scrolltoplink');
$ka_scrolltoptext = get_option('ka_scrolltoplinktext');

if (($footer_layout == "full_bottom") || ($footer_layout == "full")){ ?>
<div class="footer-area">
<div class="footer-wrapper">
<div class="footer-holder">

<?php $footer_columns = range(1,$ka_footer_columns);$footer_count = 1;$sidebar = 6;
foreach ($footer_columns as $footer => $column){
$class = ($ka_footer_columns == 1) ? '' : '';
$class = ($ka_footer_columns == 2) ? 'one_half' : $class;
$class = ($ka_footer_columns == 3) ? 'one_third' : $class;
$class = ($ka_footer_columns == 4) ? 'one_fourth' : $class;
$class = ($ka_footer_columns == 5) ? 'one_fifth' : $class;
$class = ($ka_footer_columns == 6) ? 'one_sixth' : $class; 
$lastclass = (($footer_count == $ka_footer_columns) && ($ka_footer_columns != 1)) ? '_last': '';
?><div class="<?php echo $class.$lastclass; ?>"><?php dynamic_sidebar($sidebar) ?></div><?php $footer_count++; $sidebar++; } ?>


</div><!-- footer-holder -->
</div><!-- end footer-wrapper -->
</div><!-- end footer-area -->

<?php } else {echo '<br />';} ?>
</div><!-- end footer -->


<?php if (($footer_layout == "full_bottom") || ($footer_layout == "bottom")){ ?>
<div id="footer_bottom">
  <div class="info">
      <div id="foot_left">&nbsp;<?php dynamic_sidebar("Footer Copyright - Left Side"); ?></div><!-- end foot_left -->
      <div id="foot_right"><?php if ($ka_scrolltoplink == "true"){ echo '<div class="top-footer"><a href="#" class="link-top">'.$ka_scrolltoptext.'</a></div>'; }?><?php if(is_active_sidebar(13)): ?><ul><?php dynamic_sidebar("Footer Navigation - Right Side"); ?></ul><?php endif; ?></div><!-- end foot_right -->
  </div><!-- end info -->
</div><!-- end footer_bottom -->
<?php } ?>


</div><!-- end main -->
</div><!-- end wrapper -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo KARMA_JS.'/jquery.cycle.all.min.js'; ?>"></script>
<?php 
if(is_page_template('template-homepage-jquery-2.php')){
	load_template(TEMPLATEPATH . '/functions/content/jquery-cycle-2.php');
}

if(is_page_template('template-homepage-jquery.php')){
	load_template(TEMPLATEPATH . '/functions/content/jquery-cycle.php');
}

$testimonial_enable = get_option('ka_testimonial_enable');
if($testimonial_enable == "true"){
load_template(TEMPLATEPATH . '/functions/content/jquery-testimonials.php');
}
?>
</body>
</html>