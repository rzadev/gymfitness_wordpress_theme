<?php
/*
* Template Name: Page with Sidebar
*/
get_header(); ?>

<main class="container page section with-sidebar">
	<div class="page-content">
    <!-- Load file page-loop.php dari folder template-parts  -->
    <?php get_template_part('template-parts/page', 'loop');  ?>
	</div>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>