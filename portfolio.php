<?php
/*
Template Name: Portfolio
*/

$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
$pageparent = ($post->post_parent);

if ($pagekids && !$pageparent) {
	$firstchild = $pagekids[0];
	$link = get_permalink($firstchild->ID);
	
	//echo (str_replace( "&amp;", "%26", $link ) );
	wp_redirect(str_replace( "&amp;", "&", $link ) );
}
?>
