<?php
add_action( 'init', 'create_photosvideos_types' );
function create_photosvideos_types()
{
   // add_theme_support( 'post-thumbnails', array( 'post', 'photosvideos' ) );
   // set_post_thumbnail_size( 150, 150, true);

    register_post_type( 'photosvideos',
         array(
                   'labels' => array(
                   'name' => __( 'PhotosVideos' ),
                   'singular_name' => __( 'PhotosVideos' )
              ),
              'public' => true,
              'supports' => array('title', 'editor', 'thumbnail'),
              'taxonomies' => array('categoriesphotosvideos'), // 'post_tag', 'category'
         )
    );
}


register_taxonomy('categoriesphotosvideos', 'PhotosVideos', array('hierarchical' => true, 
                                                      'label' => 'Categories Photos/Vidéos', 
                                                      'query_var' => true, 
                                                      'rewrite' => true ) );
?>