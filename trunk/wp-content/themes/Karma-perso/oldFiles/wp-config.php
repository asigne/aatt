<?php

if (function_exists('wp_nav_menu')) {	
echo '<div id="sub_nav">';

/*$menu_code = wp_nav_menu( array(
 'container' =>false,
 'theme_location' => 'Primary Navigation',
 'sort_column' => 'menu_order',
 'menu_class' => '',
 'echo' => false,
 'before' => '',
 'after' => '',
 'link_before' => '',
 'link_after' => '',
 'depth' => 0,
 'walker' => new sub_nav_walker())
 );*/
 
simple_section_nav('show_all=1');
 
echo removeEmptyTags($menu_code);
echo '</div><!-- end sub_nav -->';
}

?>

<?php
function removeEmptyTags($html_replace)
{
$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/";
return preg_replace($pattern, '', $html_replace);
}
?>