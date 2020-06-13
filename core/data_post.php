<?php
/*
 * Data Post for Shortcodes
*/
add_shortcode('post_data','post_data_shortcode');

function post_data_shortcode(){
	$time = '<span>'.get_the_time('j/m/Y').'</span>';
	return $time;
}
?>

