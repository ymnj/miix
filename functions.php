<?php 

/*
  ===================================================
    Theme support
  ===================================================
*/

add_theme_support('post-thumbanils');

function main_assets(){
  
  wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_register_style('main-styles', get_stylesheet_uri(), array());
  wp_register_style('fontello', get_template_directory_uri() . '/assets/lib/fontello/css/fontello.css');

  wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array('jquery'), false, true);

  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main-js.js', array(), false, true);

  wp_enqueue_style('normalize');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontello');
  wp_enqueue_style('main-styles');
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('main-js');
}

add_action( 'wp_enqueue_scripts', 'main_assets' );


/*
  ===================================================
    MENU
  ===================================================
*/

require_once('wp-bootstrap-navwalker.php');

function register_my_menu() {
  register_nav_menu('navigation-menu',__( 'Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
