<?php

$wp_customize->add_section(
  'section_home_deal', array(
    'title'       => 'Produtos em promoção',
    'description' => 'Configure a oferta da semana'
  )
);
  $wp_customize->add_setting(
    "setting_deal_show", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'todxs_loja_sanitize_checkbox'
    )
  );
  $wp_customize->add_control(
    "setting_deal_show", array(
      'label'       => "Mostrar oferta da semana",
      'description' => "Marque para mostrar",
      'section'     => 'section_home_deal',
      'type'        => 'checkbox'
    )
  );
  $wp_customize->add_setting(
    "setting_deal", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_deal", array(
      'label'       => "Oferta da semana",
      'description' => "ID do produto ofertado",
      'section'     => 'section_home_deal',
      'type'        => 'number'
    )
  );