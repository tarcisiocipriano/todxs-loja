<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">

    <header class="header">

      <section class="header__nav-top">
        <div class="container">
          <span>(81) 00000-0000</span>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'todxs_loja_nav_top_menu'
            ));
          ?>
        </div>
      </section>

      <section class="header__main-nav">
        <div class="container">
          <button class="header__burguer-button"><i class="fas fa-bars"></i></button>
          <div class="header__logo">
            <?php get_template_part('template-parts/header/logo'); ?>
          </div>
          <div class="header__acount">
            <?php get_template_part('template-parts/header/account'); ?>
          </div>
          <div class="header__cart">
            <?php get_template_part('template-parts/header/cart'); ?>
          </div>
          <div class="header__search">
            <?php echo class_exists('WooCommerce') ? do_shortcode('[wcas-search-form]') : get_search_form(); ?>
          </div>
        </div>
      </section>
      
      <section class="header__nav">
        <div class="container categories-container show">
          <div class="header__nav-mobile-header">
            <h2>Olá</h2>
            <button class="header__close-button"><i class="fas fa-times"></i></button>
          </div>
          <?php if(is_active_sidebar('todxs-loja-sidebar-header-nav')): dynamic_sidebar('todxs-loja-sidebar-header-nav'); endif;?>
        </div>
      </section>

    </header>