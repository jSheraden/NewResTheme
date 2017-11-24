<?php get_header(); ?>

<div class="jumbotron text-center">
  <h1 class="site-title"><?php echo get_the_title(); ?></h1>
  <div class="separator"></div>
  <h4 class="site-tagline"><?php bloginfo('description'); ?></h4>
</div>

<div class="container page-content">
  <h2 class="page-title text-center"></h2>
  <div><?php post_loop('page'); ?></div>
</div>

<?php get_footer(); ?>
