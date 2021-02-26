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
      <div class="container">
        <h2>Os populares</h2>
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
      </div>
    </section>
    <section class="new-arrivals">
      <div class="container">
        <h2>Novidades</h2>
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="date"]'); ?>
      </div>
    </section>
    <section class="deal-of-the-week">
      <div class="container">
        <h2>Promoção da semana</h2>
        <div class="row d-flex align-items-center">
          <div class="deal-img col-12 col-md-6 ml-auto text-center"></div>
          <div class="deal-desc col-12 col-md-4 mr-auto text-center"></div>
        </div>
      </div>
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