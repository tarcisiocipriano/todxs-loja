<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<main class="content-area">

  <section class="slider">
    <?php get_template_part('template-parts/home/slider') ?>
  </section>

  <?php if(class_exists('WooCommerce')): ?>
    <section class="popular-products">
      <?php get_template_part('template-parts/home/popular-products') ?>
    </section>

    <section class="deals">
      <?php get_template_part('template-parts/home/deals') ?>
    </section>

    <section class="new-arrivals">
      <?php get_template_part('template-parts/home/new-arrivals') ?>
    </section>

  <?php endif; ?>

  <section class="store-blog">
    <?php get_template_part('template-parts/home/blog') ?>
  </section>

</main>

<?php get_footer(); ?>