<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-8 col-lg-9">
        <?php
          while(have_posts()): the_post();
            get_template_part('template-parts/content/content', 'single');
          if(comments_open() || get_comments_number()):
        ?>
          <div><?php comments_template(); ?></div>
        <?php endif; endwhile; ?>
      </div>

      <?php get_sidebar(); ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>