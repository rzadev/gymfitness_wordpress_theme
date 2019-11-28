
<footer class="site-footer container">
  <div class="footer-content">
    <!-- Add menu -->
    <?php
      $args = array(
        'theme_location' => 'main-menu', //main menu dari register_nav_menus di functions.php 
        'container' => 'nav',
        'container_class' => 'footer-menu'
      );
      wp_nav_menu( $args );
    ?>

    <p class="copyright">All Rights Reserved. <?php echo get_bloginfo('name') . " " . date('Y') ?></p>
  </div>
</footer>
      <?php wp_footer();  ?>





</body>
</html>