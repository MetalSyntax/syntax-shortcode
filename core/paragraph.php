<?php 
/*
 * Shortcode of paragraph
*/
add_shortcode( 'paragraph_private', 'private_shortcode' );

function private_shortcode( $atts, $content = null ) {
     extract( shortcode_atts( array( 
        'color' => ''
    ), $atts ) ); 
    if ( is_user_logged_in() )
        return '<p class="' . $color . '">' . $content . '</p>';  
        else
        return '';
}
?>