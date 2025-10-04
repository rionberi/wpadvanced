<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>


<header class="site-header">
  <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php bloginfo('name'); ?>
  </a>
  <?php if ( get_bloginfo('description') ) : ?>
    <p class="site-tagline"><?php bloginfo('description'); ?></p>
  <?php endif; ?>

<nav class="site-nav">
  <?php
  wp_nav_menu(array(
    'theme-location'=>'primary',
    'menu_class'=>'main-menu'
  ));
  ?>
</nav>


  </header>

