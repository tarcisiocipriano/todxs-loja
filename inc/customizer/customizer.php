<?php

/**
 * https://divpusher.com/blog/wordpress-customizer-sanitization-examples/
 * https://developer.wordpress.org/themes/customize-api/customizer-objects/#controls
 * https://github.com/WPTT/code-examples
*/

function todxs_loja_customizer($wp_customize) {
  require_once get_template_directory() . '/inc/customizer/miscellaneous.php';
  require_once get_template_directory() . '/inc/customizer/slider.php';
  require_once get_template_directory() . '/inc/customizer/products-popular.php';
  require_once get_template_directory() . '/inc/customizer/products-arrivals.php';
  require_once get_template_directory() . '/inc/customizer/products-deals.php';
  require_once get_template_directory() . '/inc/customizer/blog.php';
  require_once get_template_directory() . '/inc/customizer/copyright.php';
}
add_action('customize_register', 'todxs_loja_customizer');

function todxs_loja_sanitize_checkbox($checked) {
  return ((isset($checked) && true == $checked) ? true : false);
}