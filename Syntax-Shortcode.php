<?php 
/*
Plugin Name: Syntax ShortCode
Plugin URI: http://wordpress.org/
Description: Shortcodes for WordPress
Author: MetalSnytax 
Version: 0.1
Author URI: https://metalsyntax.blogspot.com
*/

/*
 * Shortcode of twitter
*/
add_shortcode( 'tp', 'twitter_profile_shortcode' );

function twitter_profile_shortcode ( $atts ) {
    extract( shortcode_atts( array( 
        'id' => '',
        'title' => '',
        'color' => ''
    ), $atts ) ); 
    
    $output = '<a class="' . $color . '" href="http://twitter.com/'. $id. '">Twitter of '. $title. '</a></br>';
    
    return $output;
}

/*
 * Shortcode of Youtube
*/
add_shortcode( 'yte', 'youtube_embed_shortcode' );

function youtube_embed_shortcode ( $atts ) {
    extract( shortcode_atts( array( 
        'id' => '' 
    ), $atts ) ); 
    
    $output = '<iframe width="560" height="315" src="http://www.youtube.com/embed/' . $id . '"  frameborder="0" allowfullscreen></iframe></br>'; 
    
        return $output; 
}

/*
 * Shortcode of Instagram
*/
add_shortcode( 'igp', 'instagram_profile_shortcode' );

function instagram_profile_shortcode( $atts ) {
    extract( shortcode_atts( array( 
        'id' => '',
        'title' => '',
        'color' => '' 
    ), $atts ) ); 
    
    $output = '<a href="http://instagram.com/'. $id. '">Instagram of '. $title. '</a></br>';
    
    return $output;
}

/*
 * Shortcode of paragraph
*/
add_shortcode( 'private', 'private_shortcode' );

function private_shortcode( $atts, $content = null ) {
     extract( shortcode_atts( array( 
        'color' => ''
    ), $atts ) ); 
    if ( is_user_logged_in() )
        return '<p class="' . $color . '">' . $content . '</p>';  
        else
        return '';
}

/**
 * Style for Shortcodes
*/
add_action( 'wp_enqueue_scripts', 'queue_stylesheet' );

function queue_stylesheet() {
    wp_enqueue_style( 'privateshortcodestyle', 
        plugins_url( 'stylesheet.css', __FILE__ ) );
}

?>