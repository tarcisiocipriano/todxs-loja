<?php get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="row">

      <?php while(have_posts()): the_post(); ?>
        <article class="col-12">
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
        </article>
      <?php endwhile; ?>
      
    </div>
  </div>
</main>

<?php get_footer(); ?>