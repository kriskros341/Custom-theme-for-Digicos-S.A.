<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php
    wp_head();
  ?>
  </head>
<body <?php body_class(); ?>>
<div id="blackbox" class="invisible"></div>
<div class="container-fluid">

  <header class="row my_nav sticky-top shadow desktop_only">
    <div class="brand col-5">
      <a href=""><img src="http://localhost/wordpress/wp-content/uploads/2021/02/logo1.svg"/></a>
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
      <a href=""><img src="http://localhost/wordpress/wp-content/uploads/2021/02/logo1.svg"/></a>
    </div>
    <div style="width:80vw; float:right;" class="hbgr">
      <img id="mobile_hbgr" style="display:flex; float:right;" width="40px" height="40px" src="http://localhost/wordpress/wp-content/uploads/2021/02/Hbgr.svg"/>
    </div>
    <div id="mobile_menu" class="invisible">

      <?php
      wp_nav_menu(
          array(
            'theme_location' => 'Navbar_mobile',
            'menu_id' => 'menu_mobile',
            'menu_class' => 'my_navigation_mobile',
          )
        );

      ?>
    </div>
  </header>
