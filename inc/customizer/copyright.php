<?php

// copyright section
$wp_customize->add_section(
  'section_copyright', array(
    'title'       => 'Copyright',
    'description' => 'Escreva as frases do copyright'
  )
);
  $wp_customize->add_setting(
    'setting_copyright_left', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'setting_copyright_left', array(
      'label'       => 'Copyright',
      // 'description' => 'Please, add your copyright informaiton here',
      'section'     => 'section_copyright',
      'type'        => 'text'
    )
  );
