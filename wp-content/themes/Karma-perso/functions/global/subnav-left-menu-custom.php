<?php if (function_exists('navMenuCustom')) {	
echo '<div id="sub_nav">';
echo $post;
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