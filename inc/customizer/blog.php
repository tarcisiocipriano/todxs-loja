<?php

$wp_customize->add_section(
  'section_home_blog', array(
    'title'       => 'Blog',
    'description' => 'Configure se vai mostrar'
  )
);
  $wp_customize->add_setting(
    "setting_blog_show", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'todxs_loja_sanitize_checkbox'
    )
  );
  $wp_customize->add_control(
    "setting_blog_show", array(
      'label'       => "Mostrar o blog",
      'section'     => 'section_home_blog',
      'type'        => 'checkbox'
    )
  );