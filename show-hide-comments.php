<?php
/*
  Plugin Name: ARC Custom Show/Hide Comments
  Description: Creates a show/hide link or button in the comments section of a post.
  Reference: http://coreyjmahler.com/topics/create-a-button-to-showhide-wordpress-comments-with-a-click/
*/

function arcshc_load_script() { // load the file
	wp_register_script( 'show_hide_comments', plugins_url( '/show-hide-comments.js', __FILE__ ), array('jquery'), '', true ); // register the file
	wp_enqueue_script( 'show_hide_comments' ); // enqueue the file
}

add_action('wp_enqueue_scripts', 'arcshc_load_script'); // initiate the function
