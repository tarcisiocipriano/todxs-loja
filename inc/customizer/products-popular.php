<?php

$wp_customize->add_section(
  'section_home_popular', array(
    'title'       => 'Produtos populares',
    'description' => 'Configure quantos irão aparecer'
  )
);
  $wp_customize->add_setting(
    "setting_popular_max_number", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_popular_max_number", array(
      'label'       => "Produtos populares",
      'description' => 'Quantidade',
      'section'     => 'section_home_popular',
      'type'        => 'number'
    )
  );