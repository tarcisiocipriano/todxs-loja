<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="content-area">
  <main>
    <section class="slider">
      <div class="container">Slider</div>
    </section>
    <section class="popular-products">
      <div class="container">Popular Products</div>
    </section>
    <section class="new-arrivals">
      <div class="container">New Arrivals</div>
    </section>
    <section class="deal-of-the-week">
      <div class="container">Deal of the Week</div>
    </section>

    <section class="lab-blog">
      <div class="container">
        <?php
          if(have_posts()):
            while(have_posts()): the_post();
            ?>
              <article>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
              </article>
            <?php
            endwhile;
          else:
        ?>
        <p>Nothing to display</p>
        <?php endif ?>
      </div>
    </section>

  </main>
</div>

<?php get_footer(); ?>