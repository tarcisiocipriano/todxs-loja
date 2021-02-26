<?php

/**
 * https://divpusher.com/blog/wordpress-customizer-sanitization-examples/
 * https://developer.wordpress.org/themes/customize-api/customizer-objects/#controls
 * https://github.com/WPTT/code-examples
*/

function todxs_loja_customizer($wp_customize) {
  // copyright section
  $wp_customize->add_section(
    'sec_copyright', array(
      'title'       => 'Configurações do copyright',
      'description' => 'Escreva a frase do copyright'
    )
  );
    // field 1 - copyright text box
    $wp_customize->add_setting(
      'set_copyright', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      'set_copyright', array(
        'label'       => 'Copyright',
        // 'description' => 'Please, add your copyright informaiton here',
        'section'     => 'sec_copyright',
        'type'        => 'text'
      )
    );

  /*--------------------------------------------------------------------------------*/
  // slider section
  $wp_customize->add_section(
    'sec_slider', array(
      'title'       => 'Configurações dos slides',
      'description' => 'Coloque a página do slide, o texto e link do botão'
    )
  );
  for($i = 1; $i < 4; $i++) {
    // field 1 - slider page
    $wp_customize->add_setting(
      "set_slider_page{$i}", array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'absint'
      )
    );
    $wp_customize->add_control(
      "set_slider_page{$i}", array(
        'label'       => "Selecione o slider {$i}",
        // 'description' => "Selecione o slider {$i}",
        'section'     => 'sec_slider',
        'type'        => 'dropdown-pages'
      )
    );
    // field 2 - slider button text
    $wp_customize->add_setting(
      "set_slider_button_text{$i}", array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      "set_slider_button_text{$i}", array(
        'label'       => "Escreva o texto do botão {$i}",
        // 'description' => "Escreva o texto do botão {$i}",
        'section'     => 'sec_slider',
        'type'        => 'text'
      )
    );
    // field 3 - slider button url
    $wp_customize->add_setting(
      "set_slider_button_url{$i}", array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );
    $wp_customize->add_control(
      "set_slider_button_url{$i}", array(
        'label'       => "Escreva o link do botão {$i}",
        // 'description' => "Escreva o link do botão {$i}",
        'section'     => 'sec_slider',
        'type'        => 'url'
      )
    );
  }

}
add_action('customize_register', 'todxs_loja_customizer');