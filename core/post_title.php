<?php
/*
* Get Title to Post, Page or Portfolio
*/
add_shortcode('post_title','post_title_shortcode');

function post_title_shortcode(){
	$title = get_the_title();
    return $title;
}
?>