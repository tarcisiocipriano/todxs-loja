<?php

add_action('widgets_init', 'todxs_loja_sidebars');
function todxs_loja_sidebars() {
  register_sidebar(array(
    'name'          => 'Todxs Loja Main Sidebar',
    'id'            => 'todxs-loja-sidebar-1',
    'description'   => 'Arraste suas widgets para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Todxs Loja Shop Sidebar',
    'id'            => 'todxs-loja-sidebar-shop',
    'description'   => 'Arraste suas widgets da loja para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Todxs Loja Header Sidebar',
    'id'            => 'todxs-loja-sidebar-header',
    'description'   => 'Arraste suas widgets para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper widget-header">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Todxs Loja Footer Sidebar 1',
    'id'            => 'todxs-loja-sidebar-footer-1',
    'description'   => 'Arraste suas widgets para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper footer__widget-1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Todxs Loja Footer Sidebar 2',
    'id'            => 'todxs-loja-sidebar-footer-2',
    'description'   => 'Arraste suas widgets para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper footer__widget-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Todxs Loja Footer Sidebar 3',
    'id'            => 'todxs-loja-sidebar-footer-3',
    'description'   => 'Arraste suas widgets para cá',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper footer__widget-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
}