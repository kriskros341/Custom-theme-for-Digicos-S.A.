<?php
function load_stylesheets() {
  wp_register_style('bootstrap', get_template_directory_uri().'/bs_css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
/*([name], [directory], [dependencies], [version(wut?!)]*/
  wp_register_style('mystyle', get_template_directory_uri().'/my_css/style.css', array(), false, 'all');
  wp_enqueue_style('mystyle');

  wp_register_style('navigation', get_template_directory_uri().'/my_css/navigation.css', array(), false, 'all');
  wp_enqueue_style('navigation');

  wp_register_style('page_content', get_template_directory_uri().'/my_css/page_content.css', array(), false, 'all');
  wp_enqueue_style('page_content');

  wp_register_style('animations', get_template_directory_uri().'/my_css/animations.css', array(), false, 'all');
  wp_enqueue_style('animations');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery() {
  wp_deregister_script('jquery');
  wp_register_script('jquery',  get_template_directory_uri().'/my_js/jquery.js', array(), 1, true);
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_my_js() {
  /*([name], [directory], [dependencies], [version(wut?!)], [is_it_in_the_footer?(bool)] )*/
  wp_register_script('my_js',  get_template_directory_uri().'/my_js/scripts.js', array(), 1, true);
  wp_enqueue_script('my_js');
}
add_action('wp_enqueue_scripts', 'load_my_js');

add_theme_support('menus');
register_nav_menus(
    array(
        'Navbar' => __('Navbar', 'theme'),
        'Footer-menu' => __('Footer Menu', 'theme'),
        'Navbar_mobile' => __('Navbar_mobile', 'theme'),
    )
  );
 ?>
