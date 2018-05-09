<?php

if ( ! is_admin() ) {
  wp_enqueue_style('style.less', get_stylesheet_directory_uri() . '/style.less');
}
