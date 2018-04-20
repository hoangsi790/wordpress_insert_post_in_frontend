<?php
add_theme_support( 'post-thumbnails' );
/*add_theme_support( 'widgets' );
add_theme_support( 'menus' );*/

 function admin_style() {wp_enqueue_style('admin-styles', get_template_directory_uri().'/inc/admin.css');} add_action('admin_enqueue_scripts', 'admin_style');