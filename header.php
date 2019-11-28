<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?> <!-- Load css and javasript-->
</head>
<body>
  
<header class="site-header">
  <div class="container header-grid">
    <div class="navigation-bar">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri() . "/img/logo.svg"?>" alt="Logo">
        </a>
      </div>
      <!-- End logo -->

      <!-- Add menu -->
      <?php
        $args = array(
          'theme_location' => 'main-menu', //main menu dari register_nav_menus di functions.php 
          'container' => 'nav',
          'container_class' => 'main-menu'
        );
        wp_nav_menu( $args );
      ?>
    </div>
    <!-- End navigation bar -->
  </div>
  <!-- End container -->

  
</header>