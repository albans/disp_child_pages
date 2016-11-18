<?php
/*
 * Plugin Name: disp-child-pages
 * Description: Provides shortcode [disp_child_pages] that displays the list of child pages.
 */

function disp_child_pages(){
	global $post;
	if (is_page()){
		$childpages = get_pages(array( 'sort_column' => 'post_title', 'child_of' => $post->ID ));
		ob_start();
		include("template.php");
		return ob_get_clean();
	}
	return '';
}
add_shortcode('disp_child_pages', 'disp_child_pages');

?>
