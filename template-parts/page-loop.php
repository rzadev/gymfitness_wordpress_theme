<?php while(have_posts() ): the_post(); ?>
    <h1 class='text-center text-primary'><?php the_title(); ?></h1>
      <!-- Load the image -->
      <?php
        // Check if an image exist
        if(has_post_thumbnail() ):
          the_post_thumbnail('blog', array('class' => 'featured-image')); // blog is from functions.php -> add_image_size
        // else:
        //   echo '<p>No Image</p>';
        endif;
      ?>

      <?php the_content(); ?>   
  <?php endwhile; ?>