  <!-- Add sidebar -->
  <aside class='sidebar'>
    <?php 
    if(is_active_sidebar('sidebar')):
        dynamic_sidebar('sidebar'); // 'sidebar' dari functions.php -> id sidebar
    endif;
    ?>
  </aside>