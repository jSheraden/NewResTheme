<?php get_header(); ?>

<div id="page-title-wrapper" class="text-center">
  <div id="page-title">
    <span style="font-size: 300%;"><?php bloginfo('name'); ?></span>
    <div class="separator"></div>
    <span style="font-size: 150%;"><?php bloginfo('description'); ?></span>
  </div>
</div>

<div class="container page-content">
  <div><?php post_loop(get_post_format()); ?></div>
</div>

<?php get_footer(); ?>
