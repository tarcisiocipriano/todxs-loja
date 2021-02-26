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
      'title'       => 'Copyright Settings',
      'description' => 'Copyright Section'
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
        'description' => 'Please, add your copyright informaiton here',
        'section'     => 'sec_copyright',
        'type'        => 'text'
      )
    );

}
add_action('customize_register', 'todxs_loja_customizer');