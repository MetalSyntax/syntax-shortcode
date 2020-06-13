<?php 
/*
 * Shortcode of Instagram
*/
add_shortcode( 'instagram_profile', 'instagram_profile_shortcode' );

function instagram_profile_shortcode( $atts ) {
    extract( shortcode_atts( array( 
        'id' => '',
        'title' => '',
        'color' => '' 
    ), $atts ) ); 
    
    $output = '<a href="http://instagram.com/'. $id. '">Instagram of '. $title. '</a></br>';
    
    return $output;
}
?>