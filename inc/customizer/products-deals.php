<?php

$wp_customize->add_section(
  'section_home_deals', array(
    'title'       => 'Produtos em promoção',
    'description' => 'Configure os produtos em promoção'
  )
);
  // checkbox - hide / show
  $wp_customize->add_setting(
    "setting_deals_show", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'todxs_loja_sanitize_checkbox'
    )
  );
  $wp_customize->add_control(
    "setting_deals_show", array(
      'label'       => "Mostrar oferta da semana",
      'description' => "Marque para mostrar",
      'section'     => 'section_home_deals',
      'type'        => 'checkbox'
    )
  );
  // field - deals quantity
  $wp_customize->add_setting(
    "setting_deals_amount", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_deals_amount", array(
      'label'       => "Quantidade",
      'description' => "Quantos mostrar?",
      'section'     => 'section_home_deals',
      'type'        => 'number'
    )
  );
  // deal 1
  $wp_customize->add_setting(
    "setting_deal", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_deal", array(
      'label'       => "Produto 1",
      'description' => "ID do produto ofertado",
      'section'     => 'section_home_deals',
      'type'        => 'number'
    )
  );