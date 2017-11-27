<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/node_modules/bootstrap-without-jquery/dist/bootstrap-without-jquery.min.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid">
    <div class="site-header">
      <nav class="navbar navbar-default">
	    <div class="container">
	      <div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#res-menu" aria-expanded="false">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a style="font-size: 150%; !important" href="<?php echo site_url(); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
	      </div>
	      <div id="res-menu" class="collapse navbar-collapse">
		    <?php get_responsive_menu(); ?>
	      </div>
	    </div>
      </nav>
    </div>

    <div id="page-wrapper">
