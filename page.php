<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <?php
        while(have_posts()): the_post();
          get_template_part('template-parts/content/content', 'page');
        endwhile;
      ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>