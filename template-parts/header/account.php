<!-- $my_account_page_id = get_permalink(get_option('woocommerce_myaccount_page_id')); -->
<!-- echo esc_url($my_account_page_id); -->
<!-- echo esc_url(wp_logout_url($my_account_page_id)); -->

<span class="my-account-link">
  <?php 
    if(is_user_logged_in()): $current_user = wp_get_current_user(); ?>
    Olá <?php echo esc_html( $current_user->user_login ); ?>
  <?php else: ?>
    <span>Minha conta</span>
  <?php endif; ?>

  <i class="fas fa-chevron-down"></i>

  <div class="my-account-link__popover">
    <div class="my-account-link__popover__arrow"></div>
    <div class="my-account-link__popover__menu">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'todxs_loja_my_account_popover_menu'
        ));
      ?>
      <?php if(is_user_logged_in()): $my_account_page_id = get_permalink(get_option('woocommerce_myaccount_page_id')); ?>
        <!-- to do - change password link  -->
        <a class="change-password-link" href="#">Alterar senha</a>
        <a class="logout-link" href="<?php echo esc_url(wp_logout_url($my_account_page_id)); ?>">Sair</a>
      <?php endif; ?>
    </div>
    <span id="rainbow-cat"></span>
  </div>
</span>