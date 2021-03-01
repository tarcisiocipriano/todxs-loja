<?php $my_account_page_id = get_permalink(get_option('woocommerce_myaccount_page_id'));
  if(is_user_logged_in()): $current_user = wp_get_current_user(); ?>
  <a href="<?php echo esc_url($my_account_page_id); ?>">
    Olá <?php echo esc_html( $current_user->user_login ); ?>
  </a>
<?php else: ?>
  <a href="<?php echo esc_url($my_account_page_id); ?>">Minha conta</a>
<?php endif; ?>

<!-- <a href="<?php echo esc_url(wp_logout_url($my_account_page_id)); ?>">Sair</a> -->