<?php


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}


// Custom footer widget area.
register_sidebar( array(
  'name' => __( 'Custom Footer Widget Area'),
  'id' => 'custom-widget-area',
  'description' => __( 'An optional custom footer widget area', 'bootstrap-basic' ),
  'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
  'after_widget' => "</li>",
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );



  // Custom banner widget area.
  register_sidebar( array(
    'name' => __( 'Custom Banner Widget Area'),
    'id' => 'custom-banner-widget-area',
    'description' => __( 'An optional custom banner widget area', 'bootstrap-basic' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
