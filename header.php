<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php bloginfo( 'template_url' ); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="<?php bloginfo( 'template_url' ); ?>/bower_components/bootstrap/dist/js/boostrap.min.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>
  <link rel="stylesheet" href="style.css">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid">
    <div class="site-header">
      <div class="site-title">
        <h1><?php bloginfo( 'name' ); ?></h1>
      </div>
    </div>
