<?php get_header(); ?>

<h2 class="page-title text-center"><?php echo get_the_title(); ?></h2>
<div><?php post_loop('single'); ?></div>

<?php get_footer(); ?>
