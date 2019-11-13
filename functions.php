<?php

function my_file() {
  wp_enqueue_script('script-common', get_template_directory_uri() . '/js/app.js', '', true);
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/styles.min.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'my_file' );
