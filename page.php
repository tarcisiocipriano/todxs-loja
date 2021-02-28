<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <?php while(have_posts()): the_post(); ?>
        <article class="col-12">
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
          <?php if(comments_open() || get_comments_number()): ?>
            <div><?php comments_template(); ?></div>
          <?php endif; ?>
        </article>
      <?php endwhile; ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>