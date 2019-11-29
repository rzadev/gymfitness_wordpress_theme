<?php

// Creates the menu
function gymfitness_menus() {
  // WordPress function
  register_nav_menus(array(
    'main-menu' => 'Main Menu'
  ));
}

// Hook
add_action('init', 'gymfitness_menus');


// Add stylesheets and JS files
function gymfitness_scripts() {

  // Normalize.css
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

  // Google fonts
  wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');

  // Slicknav CSS
  wp_enqueue_style( 'slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

  // Main stylesheet
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');


  // Load jQuery
  wp_enqueue_script('jquery');

  // Load JS Files
  wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true); // true: load the script in the footer
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.10', true); 
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');


// Enable feature images and other stuff
function gymfitness_setup() {
  // Register new image size
  // To resize the images, use Regenerate thumbnails plugin
  add_image_size( 'square', 350, 350, true ); // true: resize the image
  add_image_size( 'portrait', 350, 724, true );
  add_image_size( 'box', 400, 375, true );
  add_image_size( 'mediumSize', 700, 400, true );
  add_image_size( 'blog', 966, 644, true );


  // Add feature image
  add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'gymfitness_setup');  // When the theme is activated and ready







