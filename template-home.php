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

    <?php if(class_exists('WooCommerce')): ?>
      <section class="popular-products">
      <?php
        $popular_limit  = get_theme_mod('set_popular_max_num', 4);
        $popular_col    = get_theme_mod('set_popular_max_col', 4);
        $arrivals_limit = get_theme_mod('set_new_arrivals_max_num', 4);
        $arrivals_col   = get_theme_mod('set_new_arrivals_max_col', 4);
      ?>
        <div class="container">
          <h2>Os populares</h2>
          <?php echo do_shortcode('[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]'); ?>
        </div>
      </section>

      <section class="new-arrivals">
        <div class="container">
          <h2>Novidades</h2>
          <?php echo do_shortcode('[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]'); ?>
        </div>
      </section>

      <?php
        $showDeal = get_theme_mod('set_deal_show', 0);
        $dealId   = get_theme_mod('set_deal');
        $currency = get_woocommerce_currency_symbol();
        $regular  = get_post_meta($dealId, '_regular_price', true);
        $sale     = get_post_meta($dealId, '_sale_price', true);

        if($showDeal == 1 && (!empty($dealId))):
          $discount_percentage = absint(100 - ( ( $sale / $regular ) * 100));
      ?>
      
      <section class="deal-of-the-week">
        <div class="container">
          <h2>Promoção da semana</h2>
          <div class="row d-flex align-items-center">
            <div class="deal-img col-12 col-md-6 ml-auto text-center">
              <?php echo get_the_post_thumbnail($dealId, 'large', array('class' => 'img-fluid')); ?>
            </div>
            <div class="deal-desc col-12 col-md-4 mr-auto text-center">
              <?php if(!empty($sale)): ?>
                <span class="discount"><?php echo $discount_percentage . '% OFF' ?></span>
              <?php endif; ?>
              <h3>
                <a href="<?php echo get_permalink($dealId); ?>"><?php echo get_the_title($dealId); ?></a>
              </h3>
              <p><?php echo get_the_excerpt($dealId); ?></p>
              <div class="prices">
                <span class="regular"><?php echo $currency . $regular ?></span>
                <?php if(!empty($sale)): ?>
                  <span class="sale"><?php echo $currency . $sale ?></span>
                <?php endif; ?>
              </div>
              <a href="<?php echo esc_url("?add-to-cart=$dealId"); ?>" class="add-to-cart">Comprar</a>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
    <?php endif; ?> <!-- if WooCommerce class exists -->

    <section class="lab-blog">
      <div class="container">
        <h2>Blog</h2>
        <div class="row">
          <?php
            $blog_posts = new WP_Query(array(
              'post_type'      => 'post',
              'posts_per_page' => 2
            ));

            if($blog_posts->have_posts()):
              while($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                <article class="col-12 col-md-6">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                      if(has_post_thumbnail()):
                        the_post_thumbnail('todxs-loja-blog', array('class' => 'img-fluid'));
                      endif;
                    ?>
                  </a>
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <div><?php the_excerpt(); ?></div>
                </article>
          <?php endwhile; wp_reset_postdata(); else: ?>
            <p>Nothing to display</p>
          <?php endif ?>
        </div> <!-- row -->
      </div> <!-- container -->
    </section>

  </main>
</div>

<?php get_footer(); ?>