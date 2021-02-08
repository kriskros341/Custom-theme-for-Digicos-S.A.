<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php
    wp_head();
  ?>
  </head>
<body <?php body_class(); ?>>
<div class="container-fluid">
  <header class="row my_nav sticky-top shadow desktop_only">
    <div class="brand">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/02/logo1.svg"/>
    </div>
    <?php wp_nav_menu(
        array(
          'theme_location' => 'Navbar',
          'menu_class' => 'my_navigation',
        )
      )
    ?>
  </header>
  <header class="row my_nav sticky-top shadow mobile_only">
    <div class="brand">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/02/logo1.svg"/>
    </div>
    <?php wp_nav_menu(
        array(
          'theme_location' => 'Navbar_mobile',
          'menu_class' => 'my_navigation',
        )
      )
    ?>
  </header>
