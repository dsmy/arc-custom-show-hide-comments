<?php
/*
  Plugin Name: ARC Custom Show/Hide Comments
  Description: Creates a show/hide link or button in the comments section of a post.
  Version: 1.1.0
  Author: David Yarde
  Author URI: https://davidyarde.com
  Text Domain: arc-show-hide-comments
  License: GPLv2 or later
  Reference: http://coreyjmahler.com/topics/create-a-button-to-showhide-wordpress-comments-with-a-click/
*/

function arcshc_load_script() { // load the file
	wp_register_script( 'show_hide_comments', plugins_url( '/show-hide-comments.js', __FILE__ ), array('jquery'), '', true ); // register the file
	wp_enqueue_script( 'show_hide_comments' ); // enqueue the file
}

add_action('wp_enqueue_scripts', 'arcshc_load_script'); // initiate the function
=======
define( 'ARC_SHC_VERSION', '1.0.0' );

function load_show_hide_comments_js() { // load the file
        wp_register_script( 'show_hide_comments', plugins_url( '/show-hide-comments.js', __FILE__ ), array( 'jquery' ), ARC_SHC_VERSION, true ); // register the file
	wp_enqueue_script( 'show_hide_comments' ); // enqueue the file
}

add_action('wp_enqueue_scripts', 'load_show_hide_comments_js'); // initiate the function
