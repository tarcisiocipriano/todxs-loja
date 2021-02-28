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

  $slideIndex = 1;
?>

<div class="slick-carousel">
  <?php
    if($slider_loop->have_posts()):
      while($slider_loop->have_posts()): $slider_loop->the_post(); ?>
        <div>
          <div class="slick-slide__content">
            <h2 class="slick-slide__title"><?php the_title(); ?></h2>
            <div class="slick-slide__content"><?php the_content(); ?></div>
            <a href="<?php echo $slider_button_url[$slideIndex]?>"><?php echo $slider_button_text[$slideIndex] ?></a>
          </div>
          <div class="slick-slide__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        </div>
  <?php $slideIndex++; endwhile; wp_reset_postdata(); ?>
  <?php else: ?>
    <p>Sem slides</p>
  <?php endif; ?>
</div>