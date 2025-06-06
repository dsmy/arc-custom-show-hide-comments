<?php
/*
  Plugin Name: ARC Custom Show/Hide Comments
  Description: Creates a show/hide link or button in the comments section of a post.
  Reference: http://coreyjmahler.com/topics/create-a-button-to-showhide-wordpress-comments-with-a-click/
*/

function load_show_hide_comments_js() { // load the file
        wp_register_script( 'show_hide_comments', plugins_url( '/show-hide-comments.js', __FILE__ ), array('jquery'), '', true ); // register the file
        wp_enqueue_script( 'show_hide_comments' ); // enqueue the file
        wp_localize_script( 'show_hide_comments', 'arcShowHideData', array(
                'show_label' => __( 'show &gt;&gt; ', 'arc-custom-show-hide-comments' ),
                'hide_label' => __( 'hide &lt;&lt; ', 'arc-custom-show-hide-comments' ),
        ) );
}

add_action('wp_enqueue_scripts', 'load_show_hide_comments_js'); // initiate the function