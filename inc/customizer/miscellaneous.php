<?php

$wp_customize->add_section(
  'section_miscellaneous', array(
    'title'       => 'Miscellaneous',
    'description' => 'Escreva as frases do copyright'
  )
);
  // contact number on nav top
  $wp_customize->add_setting(
    'setting_nav_top_contact_number', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'setting_nav_top_contact_number', array(
      'label'       => 'Número de contato na nav top',
      'section'     => 'section_miscellaneous',
      'type'        => 'text'
    )
  );
  // link to orders
  $wp_customize->add_setting(
    "setting_chang_password_link", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_chang_password_link", array(
      'label'       => "Cole o link da página de troca de senha",
      'section'     => 'section_miscellaneous',
      'type'        => 'url'
    )
  );