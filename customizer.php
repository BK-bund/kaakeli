<?php

function theme_prefix_setup() {
  add_theme_support( 'custom-logo', array() );
}

add_action( 'after_setup_theme', 'theme_prefix_setup' );

function mytheme_customize_register( $wp_customize ) {
  // add the section to contain the settings
  $wp_customize->add_section( 'colors' , array(
    'title' =>  'Farb Schema',
  ) );
  
  $txtcolors[] = array(
    'slug'=>'footer_text_color', 
    'default' => '#fff',
    'label' => 'Footer Text Farbe'
  );
  
  $txtcolors[] = array(
    'slug'=>'footer_link_color', 
    'default' => '#fff',
    'label' => 'Footer Link Farbe'
  );

  $txtcolors[] = array(
    'slug'=>'footer_background_color', 
    'default' => '#333',
    'label' => 'Footer Hintergrund Farbe'
  );

  foreach( $txtcolors as $txtcolor ) {
    // SETTINGS
    $wp_customize->add_setting(
      $txtcolor['slug'], array(
        'default'           => $txtcolor['default'],
        'type'              => 'option', 
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
      )
    );
    // CONTROLS
    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize,
        $txtcolor['slug'], 
        array('label' => $txtcolor['label'], 
        'section' => 'colors',
        'settings' => $txtcolor['slug'])
      )
    );
  }
  /*
  $wp_customize->add_setting(
    'footer_text'
    , array(
      'default' => 'text',
    )
  );
  // Footer text
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'footer_text',
      array(
          #'label'          => __( 'Dark or light theme version?', 'theme_name' ),
          'section'        => 'footer_bla',
          'settings'       => 'footer_bla',
          'type'           => 'textarea'
      )
    )
  );
  */
  $wp_customize->add_section('footer_settings', array(
    'title'          => 'Footer'
  ));
  //adding setting for footer text area
  $wp_customize->add_setting('footer_text', array(
    'default'        => 'Default Text For Footer Section',
  ));
  $wp_customize->add_control('footer_text', array(
    'label'   => 'Footer Text',
    'section' => 'footer_settings',
    'type'    => 'textarea',
  ));
  
  $wp_customize->add_section('info', array(
    'title'          => 'Website-Informationen'
  ));
  
  // Mobile logo
  $wp_customize->add_setting('mobile_logo', array(
    'default'        => '',
    'type'           => 'theme_mod',
  ));
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Mobile Logo', 'theme_name' ),
               'section'    => 'title_tagline',
               'settings'   => 'mobile_logo',
           )
       )
  );
}
add_action( 'customize_register', 'mytheme_customize_register' );


function mytheme_customize_colors() {
/**********************
text colors
**********************/
$footer_text_color = get_option( 'footer_text_color' );
$footer_link_color = get_option( 'footer_link_color' );
$footer_background_color = get_option( 'footer_background_color' );
$themelogo = get_theme_mod( 'mobile_logo' );
?>
<style>

.banner {
  /*background-image: url("<?php echo $themelogo ?>");*/
}

.bs-docs-footer {
  color: <?php echo $footer_text_color; ?>;
  background-color: <?php echo $footer_background_color; ?>;
}

.bs-docs-footer hr.fedi-dash {
  border-top: 1px dashed <?php echo $footer_text_color; ?>;
}

.bs-docs-footer a {
  color: <?php echo $footer_link_color; ?>;
}

.reiter-footer {
  border-bottom: 30px solid <?php echo $footer_background_color; ?>;
}

.reiter-footer > * {
  background-color: <?php echo $footer_background_color; ?>;
  color: <?php echo $footer_text_color; ?>;
}
</style>

<?php }
add_action( 'wp_head', 'mytheme_customize_colors' );
?>
