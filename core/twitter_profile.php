<?php
/*
 * Shortcode of twitter
*/
add_shortcode( 'twitter_profile', 'twitter_profile_shortcode' );

function twitter_profile_shortcode ( $atts ) {
    extract( shortcode_atts( array( 
        'id' => '',
        'title' => '',
        'color' => ''
    ), $atts ) ); 
    
    $output = '<a class="' . $color . '" href="http://twitter.com/'. $id. '">Twitter of '. $title. '</a></br>';
    
    return $output;
}
?>