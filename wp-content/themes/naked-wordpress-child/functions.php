<?php

// https://github.com/roborourke/wp-less
require_once( 'wp-less/wp-less.php' );
wp_enqueue_style('style.less', get_stylesheet_directory_uri() . '/style.less');

function get_follow_me( $name = null ) {
  do_action( 'get_follow_me', $name );

  $templates = array();
  $name = (string) $name;
  if ( '' !== $name ) {
    $templates[] = "follow-me-{$name}.php";
  }

  $templates[]    = 'follow-me.php';

  locate_template( $templates, true );
}