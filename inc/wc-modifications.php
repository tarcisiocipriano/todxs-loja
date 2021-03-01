<?php

function todxs_loja_wc_modify() {

  /* ------------------------------ reestruct the base woocommerce template ------------------------------ */ 
  // container / row - open
  add_action('woocommerce_before_main_content', 'todxs_loja_open_container_row', 5);
  function todxs_loja_open_container_row() {
    echo '<div class="shop-content"><div class="container"><div class="row">';
  }
  
  // container / row - close
  add_action('woocommerce_after_main_content', 'todxs_loja_close_container_row', 5);
  function todxs_loja_close_container_row() {
    echo '</div></div></div>';
  }

  /* ------------------------------ make the sidebar appear only in shopping ------------------------------ */ 

  // sidebar - remove
  remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

  if(is_shop()) {
    add_action('woocommerce_before_main_content', 'todxs_loja_add_sidebar_tags', 6);
    function todxs_loja_add_sidebar_tags() {
      echo '<div class="col-12 col-md-3 col-lg-2 order-2 order-md-1 sidebar-shop">';
    }
    
    // sidebar - add
    add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);
    
    add_action('woocommerce_before_main_content', 'todxs_loja_close_sidebar_tags', 8);
    function todxs_loja_close_sidebar_tags() {
      echo '</div>';
    }
  }
  
  /* ------------------------------ make a container surrounding the shop content ------------------------------ */ 

  
  // content column - open
  add_action('woocommerce_before_main_content', 'todxs_loja_add_shop_tags', 9);
  function todxs_loja_add_shop_tags() {
    if(is_shop()) {
      echo '<div class="col-12 col-md-9 col-lg-10 order-1 order-md-2">';
    } else {
      echo '<div class="col-12">';
    }
  }
  
  // content column - close
  add_action('woocommerce_after_main_content', 'todxs_loja_close_shop_tags', 4);
  function todxs_loja_close_shop_tags() {
    echo '</div>';
  }

  /* ------------------------------ sinle product page - move related content to separated area ------------------------------ */ 

  if(is_product()) {
    // remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
  
  
    add_action('woocommerce_after_main_content', 'todxs_loja_open_single_product_related_content_container', 11);
    function todxs_loja_open_single_product_related_content_container() {
      echo '<div class=""><div class="container">';
    }
  
    // add_action('woocommerce_after_main_content', 'woocommerce_output_product_data_tabs', 12);
    add_action('woocommerce_after_main_content', 'woocommerce_upsell_display', 13);
    add_action('woocommerce_after_main_content', 'woocommerce_output_related_products', 14);
  
    add_action('woocommerce_after_main_content', 'todxs_loja_close_single_product_related_content_container', 15);
    function todxs_loja_close_single_product_related_content_container() {
      echo '</div></div>';
    }
  }
  
  // show product short description
  // add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);

  // filter example - remove store title
  // add_filter('woocommerce_show_page_title', 'todxs_loja_remove_shop_title');
  // function todxs_loja_remove_shop_title() {
  //   return false;
  // }

}
add_action('wp', 'todxs_loja_wc_modify');