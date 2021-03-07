<?php
  $showDeal = get_theme_mod('setting_deal_show', 0);
  $dealId   = get_theme_mod('setting_deal');
  $currency = get_woocommerce_currency_symbol();
  $regular  = get_post_meta($dealId, '_regular_price', true);
  $sale     = get_post_meta($dealId, '_sale_price', true);
?>

<?php if($showDeal == 1 && (!empty($dealId)) && (!empty($sale))):
  $discount = absint(100 - ( ( $sale / $regular ) * 100));
?>
  
  <div class="container">

    <h2>Promoção da semana</h2>

    <div class="row d-flex align-items-center">
    
      <!-- image -->
      <div class="deal-img col-12 col-md-6 ml-auto text-center">
        <?php echo get_the_post_thumbnail($dealId, 'large', array('class' => 'img-fluid')); ?>
      </div>

      <div class="deal-desc col-12 col-md-6 mr-auto text-center">
        
        <!-- discount -->
        <?php if(!empty($sale)): ?>
          <span class="discount"><?php echo $discount . '% OFF' ?></span>
        <?php endif; ?>
        
        <!-- name -->
        <h3>
          <a href="<?php echo get_permalink($dealId); ?>"><?php echo get_the_title($dealId); ?></a>
        </h3>

        <!-- description -->
        <p><?php echo get_the_excerpt($dealId); ?></p>

        <!-- price -->
        <div class="prices">
          <span class="regular"><?php echo $currency . $regular ?></span>
          <?php if(!empty($sale)): ?>
            <span class="sale"><?php echo $currency . $sale ?></span>
          <?php endif; ?>
        </div>

        <!-- link -->
        <a href="<?php echo esc_url("?add-to-cart=$dealId"); ?>" class="add-to-cart">Comprar</a>
      </div>

    </div>

  </div>

<?php endif; ?>