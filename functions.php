<?php

/**
 * Enqueue stylesheet
 */
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_style' );
function twentytwentytwo_child_style() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'twentytwentytwo-style' ), 
        wp_get_theme()->get('Version')
    );
}





/**
 * Adds custom post type
 *
 */
function custom_post_type() {
    
    register_post_type( 'eggcerpts',
    array(
            'labels' => array(
                'name' => __( 'Eggcerpts' ),
                'singular_name' => __( 'Eggcerpt' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'eggcerpts'),
            'show_in_rest' => true,
            )
        );
    }
add_action( 'init', 'custom_post_type' );

function add_cpt_services_support(){
    add_post_type_support( 'eggcerpts', 'editor' );
}
add_action('init', 'add_cpt_services_support');


