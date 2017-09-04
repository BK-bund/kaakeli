<?php

include_once( 'customizer.php' );

function register_top_menu() {
  register_nav_menu('header-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );

function enqueue_bootstrap_style() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap-3.3.7-dist/css/bootstrap.min.css', '3.3.7', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_style' );

function enqueue_kaakeli_style() {
  wp_enqueue_style( 'kaakeli', get_template_directory_uri().'/style.css', array('bootstrap'),  '1.0.3', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_kaakeli_style' );


add_theme_support( 'custom-background' );


setlocale(LC_TIME, "de_DE.UTF-8");
?>
