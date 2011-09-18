<?php
add_action( 'init', 'create_resultat_types' );
function create_resultat_types()
{
    add_theme_support( 'post-thumbnails', array( 'post', 'resultat' ) );
    set_post_thumbnail_size( 150, 150, true);
    //add_image_size( 'single-post-thumbnail', 400, 9999 );

    register_post_type( 'resultat',
         array(
                   'labels' => array(
                   'name' => __( 'Résultats' ),
                   'singular_name' => __( 'Resultat' )
              ),
              'public' => true,
              'supports' => array('title', 'editor', 'thumbnail'),
              'taxonomies' => array('categoriesresulutat'), // 'post_tag', 'category'
         )
    );
}


register_taxonomy('categoriesresulutat', 'Resultat', array('hierarchical' => true, 
                                                      'label' => 'Categories Résultats', 
                                                      'query_var' => true, 
                                                      'rewrite' => true ) );
?>