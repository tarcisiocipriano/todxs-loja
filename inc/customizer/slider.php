<?php

// slider section
$wp_customize->add_section(
  'section_slider', array(
    'title'       => 'Configurações dos slides',
    'description' => 'Coloque a página do slide, o texto e link do botão'
  )
);
for($i = 1; $i < 4; $i++) {
  // field 1 - slider page
  $wp_customize->add_setting(
    "setting_slider_page{$i}", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_slider_page{$i}", array(
      'label'       => "Selecione o slider {$i}",
      // 'description' => "Selecione o slider {$i}",
      'section'     => 'section_slider',
      'type'        => 'dropdown-pages'
    )
  );
  // field 2 - slider button text
  $wp_customize->add_setting(
    "setting_slider_button_text{$i}", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    "setting_slider_button_text{$i}", array(
      'label'       => "Escreva o texto do botão {$i}",
      // 'description' => "Escreva o texto do botão {$i}",
      'section'     => 'section_slider',
      'type'        => 'text'
    )
  );
  // field 3 - slider button url
  $wp_customize->add_setting(
    "setting_slider_button_url{$i}", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_button_url{$i}", array(
      'label'       => "Escreva o link do botão {$i}",
      // 'description' => "Escreva o link do botão {$i}",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
}