<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
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
            <a href="<?php echo site_url(); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
          </div>
          <div id="res-menu" class="collapse navbar-collapse">
        	  <?php get_responsive_menu(); ?>
          </div>
        </div>
      </nav>
      <div class="jumbotron text-center">
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <div class="separator"></div>
        <h4 class="site-tagline"><?php bloginfo('description'); ?></h4>
      </div>
    </div>
    
    <div id="page-wrapper">
      <div class="container page-content">
	