<?php

add_theme_support( 'post-thumbnails' );

function get_post_more()
{
	$content = apply_filters( 'the_content', get_the_content() );
	$content = str_replace( ']]>', ']]&gt;', $content );
	
	$split_index = strrpos($content, '(more...)') + 8;

	return (substr($content, $split_index));
}