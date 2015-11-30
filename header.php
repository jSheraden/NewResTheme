<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid">
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <div class="site-title">
          <a href="<?php echo site_url(); ?>">
            <h1><?php bloginfo( 'name' ); ?></h1>
          </a>
        </div>
        <div><?php wp_nav_menu(); ?></div>
      </div>
    </div>
    <div class="container page-content">
