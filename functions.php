<?php

show_admin_bar( false );
add_theme_support( 'post-thumbnails' );

function get_post_more()
{
	$content = apply_filters( 'the_content', get_the_content() );
	$content = str_replace( ']]>', ']]&gt;', $content );
	
	$split_index = strrpos($content, '(more...)') + 8;

	return (substr($content, $split_index));
}

function get_featured_img_url()
{
	return wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
}