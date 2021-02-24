<?php

function todxs_loja_scripts() {
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('todxs_loja_script_vendors', get_template_directory_uri() . '/scripts/vendors.js', array(), '1.0', true);
  wp_enqueue_script('todxs_loja_script_main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.0', true);
  wp_enqueue_style('todxs_loja_style', get_template_directory_uri() . '/stylesheets/main.css', array(), '1.0', 'all');
  wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap|https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap' );
}

add_action('wp_enqueue_scripts', 'todxs_loja_scripts');

function todxs_loja_config() {
  
  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'todxs_loja_main_menu' => 'Todxs Loja Main Menu',
      'todxs_loja_footer_menu' => 'Todxs Loja Footer Menu'
    )
  );

}
add_action('after_setup_theme', 'todxs_loja_config', 0);