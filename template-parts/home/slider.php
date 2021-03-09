<?php $sliderHeroQuantity = get_theme_mod('setting_slider_quantity', 0); ?>

<div class="slick-carousel">
  <?php if ($sliderHeroQuantity >= 1): ?>
    <a class="slider-hero" href="<?php echo get_theme_mod('setting_slider_link_1'); ?>">
      <picture>
        <source srcset="<?php echo get_theme_mod('setting_slider_image_large_1'); ?>" media="(min-width: 576px)">
        <img src="<?php echo get_theme_mod('setting_slider_image_small_1'); ?>" alt="" >
      </picture>
    </a>
  <?php endif; if ($sliderHeroQuantity >= 2): ?>
    <a class="slider-hero" href="<?php echo get_theme_mod('setting_slider_link_2'); ?>">
      <picture>
        <source srcset="<?php echo get_theme_mod('setting_slider_image_large_2'); ?>" media="(min-width: 576px)">
        <img src="<?php echo get_theme_mod('setting_slider_image_small_2'); ?>" alt="" >
      </picture>
    </a>
  <?php endif; if ($sliderHeroQuantity >= 3): ?>
    <a class="slider-hero" href="<?php echo get_theme_mod('setting_slider_link_3'); ?>">
      <picture>
        <source srcset="<?php echo get_theme_mod('setting_slider_image_large_3'); ?>" media="(min-width: 576px)">
        <img src="<?php echo get_theme_mod('setting_slider_image_small_3'); ?>" alt="" >
      </picture>
    </a>
  <?php endif; ?>
</div>