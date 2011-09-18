<?php
function navMenuCustom($post){
	echo "</br>";
	$post_ancestors = ( isset($post->ancestors) ) ? $post->ancestors : get_post_ancestors($post); //get the current page's ancestors either from existing value or by executing function
	$top_page = $post_ancestors ? end($post_ancestors) : $post->ID; //get the top page id
	$thedepth = 0; //initialize default variable"<h2>"s
	$ancestors_me = implode( ',', $post_ancestors ) . ',' . $post->ID;
	//exclude pages not in direct hierarchy
	foreach ($post_ancestors as $anc_id) 
	{
		$pageset = get_pages(array( 'child_of' => $anc_id, 'parent' => $anc_id, 'exclude' => $ancestors_me ));
		foreach ($pageset as $page) {
			$excludeset = get_pages(array( 'child_of' => $page->ID, 'parent' => $page->ID ));
			foreach ($excludeset as $expage) { $exclude_list .= ',' . $expage->ID; }
		}
	}	
	$thedepth = count($post_ancestors)+1; //prevents improper grandchildren from showing		
	if($thedepth != 1){	//only if the page is not the top of the hierarchy
		$top_page = $post->post_parent;	
	}
	$children = wp_list_pages(array( 'title_li' => '', 'echo' => 0, 'depth' => $thedepth, 'child_of' => $top_page, 'exclude' => $exclude_list ));	//get the list of pages, including only those in our page list
	
	echo "<div><ul>";
	echo apply_filters('simple_section_page_list', $children );
	echo "</ul></div>";
}
?>