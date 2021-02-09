<!DOCTYPE html>
<html lang="pl">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Jesteśmy jest firmą inżynierską oferującą szeroki katalog usług telekomunikacyjnych na terenie całej Polski.">
  <link rel="icon" type="image/png" href="http://krzczu.skladzik.webd.pro/wp-content/uploads/2021/02/logo1.png"/>
  <title>Digicos</title>
  <?php
    wp_head();
  ?>
  </head>
<body <?php body_class(); ?>>
<div id="loading_placeholder">
  <div class="loading_image">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 640" width="50vw" height="50vw"><defs>
      <path d="M76.32 318.29C76.32 433.22 169.4 550 146.32 550C123.25 550 48.29 432.55 48.29 317.62C48.29 202.7 123.25 100 146.32 100C169.4 100 76.32 203.37 76.32 318.29Z" id="d9F1T3YlN"></path>
      <path d="M571.97 318.29C571.97 433.22 478.9 550 501.97 550C525.04 550 600 432.55 600 317.62C600 202.7 525.04 100 501.97 100C478.9 100 571.97 203.37 571.97 318.29Z" id="a5ev9dufu"></path>
      <path d="M495.9 319.78C495.9 409.17 402.83 500 425.9 500C448.97 500 523.93 408.65 523.93 319.26C523.93 229.87 448.97 150 425.9 150C402.83 150 495.9 230.4 495.9 319.78Z" id="bbCuK0YHG"></path>
      <path d="M151.63 317.87C149.1 407.23 239.57 500.65 216.51 500C193.44 499.34 121.1 405.91 123.62 316.56C126.15 227.21 203.34 149.48 226.4 150.14C249.47 150.79 154.16 228.52 151.63 317.87Z" id="cpLcDQCdC"></path>
      <path d="M206.97 336.52C206.97 336.52 200 336.96 200 342.56C200 348.15 204.88 349.08 206.67 349.08C208.28 349.08 216.38 349.08 230.94 349.08C247.1 349.08 256.07 349.08 257.87 349.08C257.87 349.08 261.98 349.37 267.72 340.7C269.07 338.59 269.22 338.77 270.69 336.57C272.19 334.34 276.45 331.01 277.69 337.2C278.69 341.99 282.46 364.93 282.46 364.93C282.75 366.6 285.03 379.96 285.31 381.63C285.31 381.63 287.04 386.32 292.82 386.32C298.61 386.32 298.87 387.47 301.67 378.46C304.41 369.45 316.74 327.64 316.74 327.64C317.99 323.45 327.96 289.94 329.21 285.75C329.21 285.75 330.68 277.73 333.64 277.73C336.57 277.73 336.57 282.49 337.19 285.63C337.77 288.77 348.31 389.36 348.31 389.36C348.31 389.36 349.96 397.32 357.51 397.32C365.05 397.32 367.96 388.94 367.96 388.94C370 385.71 386.28 359.89 388.32 356.66C388.32 356.66 388.86 353.9 394.32 353.9C399.69 353.9 442.63 353.9 448 353.9C448 353.9 454.35 352.71 454.35 346.79C454.35 342.64 446.54 341.34 437.38 341.34C432.9 341.34 397.11 341.34 392.63 341.34C392.63 341.34 380.47 341.34 377.41 346.44C371.4 356.69 361.52 372.9 361.52 372.9C360.43 362.23 351.66 276.89 350.56 266.22C350.56 266.22 348.59 242.68 335.37 242.68C324.63 242.68 320.11 265.44 320.11 265.44C317.86 272.89 299.91 332.46 297.67 339.9C297.67 339.9 294.55 347.7 292.9 338.91C291.83 333.33 287.55 308.49 287.55 308.49C287.55 308.49 287.04 301.95 280.94 301.61C274.82 301.3 272.55 309.29 271.51 310.18C270.44 311.09 256.36 334.15 256.36 334.15C256.36 334.15 255.05 336.54 250.71 336.54C246.43 336.63 206.97 336.52 206.97 336.52" id="l4biXoOtSr"></path>
    </defs>
    <g><g><g><use xlink:href="#d9F1T3YlN" opacity="1" fill="#0a102d" fill-opacity="1"></use></g><g><use xlink:href="#a5ev9dufu" opacity="1" fill="#0a102d" fill-opacity="1"></use></g><g><use xlink:href="#bbCuK0YHG" opacity="1" fill="#0a102d" fill-opacity="1"></use></g><g><use xlink:href="#cpLcDQCdC" opacity="1" fill="#0a102d" fill-opacity="1"></use></g><g><use xlink:href="#l4biXoOtSr" opacity="1" fill="#0a102d" fill-opacity="1"></use><g><use xlink:href="#l4biXoOtSr" opacity="1" fill-opacity="0" stroke="#000000" stroke-width="1" stroke-opacity="0"></use></g></g></g></g></svg>

  </div>
</div>
<div id="blackbox" class="invisible"></div>
<div class="container-fluid">

  <header class="row my_nav sticky-top shadow desktop_only">
    <div class="brand col-3">
      <a href="<?php echo site_url('front-page'); ?>"><img src="http://krzczu.skladzik.webd.pro/wp-content/uploads/2021/02/logo1.svg" alt="Logo Digicos Desktop S.A."/></a>
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
      <a href="<?php echo site_url('front-page'); ?>"><img src="http://krzczu.skladzik.webd.pro/wp-content/uploads/2021/02/logo1.svg" alt="Logo Mobile Digicos S.A."/></a>
    </div>
    <div style="width:60vw"></div>
    <div style="width:20vw;" class="hbgr">
      <div id="mobile_hbgr"></div>
    </div>
    <div id="mobile_menu">

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
