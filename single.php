<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">
    
      <?php
        while(have_posts()): the_post();
          get_template_part('template-parts/content/content', 'single');
        if(comments_open() || get_comments_number()):
      ?>
        <div class="col-12"><?php comments_template(); ?></div>
      <?php endif; endwhile; ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>