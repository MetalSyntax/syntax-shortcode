<?php
/*
 * Style for Shortcodes
*/
add_action( 'wp_enqueue_scripts', 'queue_stylesheet' );

function queue_stylesheet() {
    wp_enqueue_style( 'privateshortcodestyle', 
        plugins_url( '../style/stylesheet.css', __FILE__ ) );
}
?>