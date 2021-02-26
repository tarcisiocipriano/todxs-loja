<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="content-area">
  <main>
    <section class="slider">
      <div class="slick-carousel">
        <?php
          for($i = 1; $i < 4; $i++):
            $slider_page[$i] = get_theme_mod("set_slider_page{$i}");
            $slider_button_text[$i] = get_theme_mod("set_slider_button_text{$i}");
            $slider_button_url[$i] = get_theme_mod("set_slider_button_url{$i}");
          endfor;

          $slider_loop = new WP_Query(array(
            'post_type'      => 'page',
            'posts_per_page' => 3,
            'post__in'       => $slider_page,
            'orderby'        => 'post__in'
          ));
          $j = 1;
          if($slider_loop->have_posts()):
            while($slider_loop->have_posts()): $slider_loop->the_post(); ?>
              <div>
                <div class="slick-slide__content">
                  <h2 class="slick-slide__title"><?php the_title(); ?></h2>
                  <div class="slick-slide__content"><?php the_content(); ?></div>
                  <a href="<?php echo $slider_button_url[$j]?>"><?php echo $slider_button_text[$j] ?></a>
                </div>
                <div class="slick-slide__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                <!-- the_post_thumbnail('todxs-loja-slider', array('class' => 'img-fluid')); -->
              </div>
        <?php $j++; endwhile; wp_reset_postdata(); else: ?>
          <li style="height: 300px; background: tomato"></li>
          <li style="height: 300px; background: lightblue"></li>
          <li style="height: 300px; background: lightgreen"></li>
        <?php endif; ?>
      </div>
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