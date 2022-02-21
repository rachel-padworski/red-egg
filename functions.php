<?php

/**
 * Enqueue stylesheet
 */
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_style' );
function twentytwentytwo_child_style() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'twentytwentytwo-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

