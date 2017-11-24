<?php get_header(); ?>

<div class="text-center" style="padding: 200px 0; color: #FFFFFF; background-color: #505050;">
  <div style="padding: 50px; display: inline-block; background-color: rgba(0, 0, 0, 0.25);">
    <span style="font-size: 300%;"><?php bloginfo('name'); ?></span>
    <div class="separator"></div>
    <span style="font-size: 150%;"><?php bloginfo('description'); ?></span>
  </div>
</div>

<div class="container page-content">
  <div><?php post_loop(get_post_format()); ?></div>
</div>

<?php get_footer(); ?>
