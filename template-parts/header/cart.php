<a href="<?php echo wc_get_cart_url(); ?>" class="cart-button">
  <i class="fas fa-shopping-cart"></i>
  <span class="cart-items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
</a>