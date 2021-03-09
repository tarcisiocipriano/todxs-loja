<?php

// slider section
$wp_customize->add_section(
  'section_slider', array(
    'title'       => 'Configurações dos slides',
    'description' => 'Copie os links das imagens na galeria e cole abaixo, para os slides grandes e pequenos. Não esqueça de por um link para redirecionar o usuário.'
  )
);
  // how many?
  $wp_customize->add_setting(
    "setting_slider_quantity", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );
  $wp_customize->add_control(
    "setting_slider_quantity", array(
      'label'       => "Quantidade",
      'description' => "De 1 a 3",
      'section'     => 'section_slider',
      'type'        => 'number'
    )
  );
  // -------------------------------------------------- Slide 1 --------------------------------------------------
  // image large
  $wp_customize->add_setting(
    "setting_slider_image_large_1", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_large_1", array(
      'label'       => "Url imagem grande 1",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // image small
  $wp_customize->add_setting(
    "setting_slider_image_small_1", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_small_1", array(
      'label'       => "Url imagem pequena 1",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // slide link
  $wp_customize->add_setting(
    "setting_slider_link_1", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_link_1", array(
      'label'       => "Url link 1",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );

  // -------------------------------------------------- Slide 2 --------------------------------------------------
  // image large
  $wp_customize->add_setting(
    "setting_slider_image_large_2", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_large_2", array(
      'label'       => "Url imagem grande 2",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // image small
  $wp_customize->add_setting(
    "setting_slider_image_small_2", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_small_2", array(
      'label'       => "Url imagem pequena 2",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // slide link
  $wp_customize->add_setting(
    "setting_slider_link_2", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_link_2", array(
      'label'       => "Url link 2",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );

  // -------------------------------------------------- Slide 3 --------------------------------------------------
  // image large
  $wp_customize->add_setting(
    "setting_slider_image_large_3", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_large_3", array(
      'label'       => "Url imagem grande 3",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // image small
  $wp_customize->add_setting(
    "setting_slider_image_small_3", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_image_small_3", array(
      'label'       => "Url imagem pequena 3",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // slide link
  $wp_customize->add_setting(
    "setting_slider_link_3", array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    "setting_slider_link_3", array(
      'label'       => "Url link 3",
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );