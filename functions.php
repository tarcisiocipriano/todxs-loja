<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/register-sidebars.php';
if(class_exists('WooCommerce')) {
  require_once get_template_directory() . '/inc/wc-show-percentage.php';
  require get_template_directory() . '/inc/wc-modifications.php';
}

function todxs_loja_scripts() {
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('todxs_loja_script_vendors', get_template_directory_uri() . '/scripts/vendors.js', array(), '1.0', true);
  wp_enqueue_script('todxs_loja_script_main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.0', true);
  wp_enqueue_style('todxs_loja_style', get_template_directory_uri() . '/stylesheets/main.css', array(), '1.0', 'all');
  wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script');
}
add_action('wp_enqueue_scripts', 'todxs_loja_scripts');

function todxs_loja_config() {
  register_nav_menus(
    array(
      'todxs_loja_main_menu' => 'Todxs Loja Main Menu',
      'todxs_loja_footer_menu' => 'Todxs Loja Footer Menu'
    )
  );

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support('wc-product-gallery-zoom');
  // add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');

  add_theme_support('custom-logo', array(
    'height'      => 40,
    'width'       => 100,
    'flex_height' => true,
    'flex_width'  => true
  ));

  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'    => 10,
      'min_rows'        => 5,
      'max_rows'        => 10,
      'default_columns' => 4,
      'min_columns'     => 4,
      'max_columns'     => 4,
    )
  ));

  add_image_size('todxs-loja-slider', 1920, 300, array('center', 'center'));
  add_image_size('todxs-loja-blog', 960, 640, array('center', 'center'));

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }
}
add_action('after_setup_theme', 'todxs_loja_config', 0);

// Show cart contents / total Ajax
add_filter('woocommerce_add_to_cart_fragments', 'todxs_loja_woocommerce_header_add_to_cart_fragment');
function todxs_loja_woocommerce_header_add_to_cart_fragment($fragments) {
	global $woocommerce;

	ob_start();

	?>
	<span class="cart-items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.cart-items'] = ob_get_clean();
	return $fragments;
}

// query out of stock products by last
add_filter('posts_clauses', 'order_by_stock_status');
function order_by_stock_status($posts_clauses) {
  global $wpdb;
  // only change query on WooCommerce loops
  if (is_woocommerce() && (is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy())) {
    $posts_clauses['join'] .= " INNER JOIN $wpdb->postmeta istockstatus ON ($wpdb->posts.ID = istockstatus.post_id) ";
    $posts_clauses['orderby'] = " istockstatus.meta_value ASC, " . $posts_clauses['orderby'];
    $posts_clauses['where'] = " AND istockstatus.meta_key = '_stock_status' AND istockstatus.meta_value <> '' " . $posts_clauses['where'];
  }
  return $posts_clauses;
}

// cshange number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 16;
  return $cols;
}