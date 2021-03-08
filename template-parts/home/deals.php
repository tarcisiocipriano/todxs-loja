<?php
  $showDeal = get_theme_mod('setting_deals_show', 0);
  $dealId   = get_theme_mod('setting_deal');
  $currency = get_woocommerce_currency_symbol();
  $regular  = get_post_meta($dealId, '_regular_price', true);
  $sale     = get_post_meta($dealId, '_sale_price', true);
  if ((!empty($sale))) {
    $discount = absint(100 - ( ( $sale / $regular ) * 100));
  }
?>

<?php if($showDeal == 1 && (!empty($dealId)) && (!empty($sale))): ?>
  <div class="container">
    <h2>Promoção da semana</h2>
    <div class="deals__card">
      
      <div class="row">
        <div class="col-12 col-md-6 deal">
          <?php echo get_the_post_thumbnail($dealId, 'large', array('class' => 'img-fluid')); ?>
        </div>
        <div class="ol-12 col-md-6 deal__content">
          <span class="discount"><?php echo $discount . '% OFF' ?></span>
          <h3><a href="<?php echo get_permalink($dealId); ?>"><?php echo get_the_title($dealId); ?></a></h3>
          <p><?php echo get_the_excerpt($dealId); ?></p>
          <div class="prices">
            <span class="regular"><?php echo $currency . $regular ?></span>
            <?php if(!empty($sale)): ?>
              <span class="sale"><?php echo $currency . $sale ?></span>
            <?php endif; ?>
          </div>
          <a class="add-to-cart ajax_add_to_cart"
            href="<?php echo esc_url("?add-to-cart=$dealId"); ?>">
            Comprar
          </a>
          </a>
        </div>
      </div>

    </div>
  </div>
<?php endif; ?>