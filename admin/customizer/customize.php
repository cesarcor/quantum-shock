<?php

function qs_customize_hero( $wp_customize ) {
    // $wp_customize->add_panel();

    /*

      Hero Type Setting

     */
    $wp_customize->add_section(
                      'hero_section', array(
                        'title' => __('Hero Section'),
                        'description' => __('Select Hero (Above the fold) section type'),
                        'priority' => 60,
                        'capability' => 'edit_theme_options'
                      ));

    $wp_customize->add_setting( 'hero_setting', array(
      'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'default' => '',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => '',
      'sanitize_js_callback' => '', // Basically to_json.
    ));

    $wp_customize->add_control( 'hero_setting', array(
        'type' => 'radio',
        'section' => 'hero_section', // Add a default or your own section
        'label' => __( 'Custom Radio Selection' ),
        'description' => __( 'This is a custom radio input.' ),
        'choices' => array(
          'full-width' => __( 'Full Width' ),
          'full-width-full-overlay' => __( 'Full Width, Full Overlay' ),
          'fractal' => __( 'Fractal' )
                )
    ) );


    /*

      Layout Type Setting

     */
    $wp_customize->add_section(
                      'layout_width', array(
                        'title' => __('Layout Settings'),
                        'description' => __('Select type of layout'),
                        'priority' => 50,
                        'capability' => 'edit_theme_options'
                      ));

    $wp_customize->add_setting( 'layout_setting', array(
      'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'default' => '',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => '',
      'sanitize_js_callback' => '', // Basically to_json.
    ));

    $wp_customize->add_control( 'layout_setting', array(
        'type' => 'radio',
        'section' => 'layout_width', // Add a default or your own section
        'label' => __( 'Custom Radio Selection' ),
        'description' => __( 'This is a custom radio input.' ),
        'choices' => array(
          'full-width' => __( 'Full Width Layout' ),
          'boxed-layout' => __( 'Boxed Layout' )
        )
    ) );

    /*

      Blog Listing Type

     */

     $wp_customize->add_section(
                       'blog_listing_settings', array(
                         'title' => __('Blog Listing Settings'),
                         'description' => __('Select type of layout'),
                         'priority' => 50,
                         'capability' => 'edit_theme_options'
                       ));

     $wp_customize->add_setting( 'listing_type', array(
       'type' => 'theme_mod', // or 'option'
       'capability' => 'edit_theme_options',
       'default' => '',
       'transport' => 'refresh', // or postMessage
       'sanitize_callback' => '',
       'sanitize_js_callback' => '', // Basically to_json.
     ));

     $wp_customize->add_control( 'listing_type', array(
         'type' => 'radio',
         'section' => 'blog_listing_settings', // Add a default or your own section
         'label' => __( 'Custom Radio Selection' ),
         'description' => __( 'This is a custom radio input.' ),
         'choices' => array(
           'brick-listing-type' => __( 'Brick Listing Type' ),
           'two-column-listing-type' => __( 'Two Column Listing Type' )
         )
     ) );


    /*

      Color Settings

     */

     $wp_customize->add_section(
                         'color_setting', array(
                         'title' => __('Color Settings'),
                         'description' => __('Select type of layout'),
                         'priority' => 50,
                         'capability' => 'edit_theme_options'
                       ));

     // Hero Layout Heading Color
     $wp_customize->add_setting( 'hero_heading_color', array(
       'type' => 'theme_mod', // or 'option'
       'capability' => 'edit_theme_options',
       'default' => '#FFFFFF',
       'transport' => 'refresh', // or postMessage
       'sanitize_callback' => '',
       'sanitize_js_callback' => '', // Basically to_json.
     ));

     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
    	'label'        => 'Hero Post Heading',
    	'section'    => 'color_setting',
    	'settings'   => 'hero_heading_color',
    ) ) );


    // Overlay Color
    $wp_customize->add_setting( 'overlay_color', array(
      'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'default' => '#76BED0',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => '',
      'sanitize_js_callback' => '', // Basically to_json.
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_color', array(
     'label'        => 'Background Color',
     'section'    => 'color_setting',
     'settings'   => 'overlay_color',
   ) ) );


}

add_action( 'customize_register', 'qs_customize_hero' );
