<?php

$wp_customize->add_section(
  'section_home_arrivals', array(
    'title'       => 'Produtos novos',
    'description' => 'Configure quantos irão aparecer'
  )
);
  $wp_customize->add_setting(
    "setting_arrivals_max_number", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_arrivals_max_number", array(
      'label'       => "Novos produtos",
      'description' => 'Quantidade',
      'section'     => 'section_home_arrivals',
      'type'        => 'number'
    )
  );