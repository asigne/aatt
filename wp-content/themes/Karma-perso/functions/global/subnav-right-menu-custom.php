<?php if (function_exists('navMenuCustom')) {	
echo '<div id="sub_nav" class="nav_right_sub_nav">';

echo navMenuCustom($post);
  
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