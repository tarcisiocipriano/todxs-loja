<?php

function todxs_loja_wc_modify() {
  // container / row - open
  add_action('woocommerce_before_main_content', 'todxs_loja_open_container_row', 5);
  function todxs_loja_open_container_row() {
    echo '<div class="container shop-content"><div class="row">';
  }
  
  // container / row - close
  add_action('woocommerce_after_main_content', 'todxs_loja_close_container_row', 5);
  function todxs_loja_close_container_row() {
    echo '</div></div>';
  }

  // sidebar - remove
  remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

  if(is_shop()) {
    add_action('woocommerce_before_main_content', 'todxs_loja_add_sidebar_tags', 6);
    function todxs_loja_add_sidebar_tags() {
      echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }
    
    // sidebar - add
    add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);
    
    add_action('woocommerce_before_main_content', 'todxs_loja_close_sidebar_tags', 8);
    function todxs_loja_close_sidebar_tags() {
      echo '</div>';
    }

    // show product short description
    add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
  }
  
  // content column - open
  add_action('woocommerce_before_main_content', 'todxs_loja_add_shop_tags', 9);
  function todxs_loja_add_shop_tags() {
    if(is_shop()) {
      echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
    } else {
      echo '<div class="col">';
    }
  }
  
  // content column - close
  add_action('woocommerce_after_main_content', 'todxs_loja_close_shop_tags', 4);
  function todxs_loja_close_shop_tags() {
    echo '</div>';
  }
  
  
  // filter example - remove store title
  // add_filter('woocommerce_show_page_title', 'todxs_loja_remove_shop_title');
  // function todxs_loja_remove_shop_title() {
  //   return false;
  // }
}
add_action('wp', 'todxs_loja_wc_modify');