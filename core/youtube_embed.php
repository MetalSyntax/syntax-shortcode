<?php
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
?>