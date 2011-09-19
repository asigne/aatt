<?php
function karma_sideways($atts, $content = null){
  extract(shortcode_atts(array(
  'text' => '',
  'rotate' => "false"), $atts));
  
  if($rotate == "true"){
  	$output = '<div class="csstransforms"><aside><h3>'.$text.'</h3><p>' .do_shortcode($content).'</p></aside></div>';
  }
  else{
  	$output = '<aside><h3>'.$text.'</h3><p>' .do_shortcode($content).'</p></aside>';
  }
  return $output;
}
add_shortcode('sideways', 'karma_sideways');
?>