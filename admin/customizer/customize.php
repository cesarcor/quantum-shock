<?php

function qs_customize_hero( $wp_customize ) {

  if ( ! isset( $wp_customize ) ) {
    return;
  }

  class qs_custom_img_control extends \WP_Customize_Control{

    function render_conten(){

      if (empty($this->choices))
             return;

         $name = '_customize-radio-' . $this->id;
         ?>
         <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
         <ul class="controls" id='theme-slug-img-container'>
             <?php
             foreach ($this->choices as $value => $label) :
                 $class = ($this->value() == $value) ? 'theme-slug-radio-img-selected theme-slug-radio-img-img' : 'theme-slug-radio-img-img';
                 ?>
                 <li style="display: inline;">
                     <label>
                         <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                                                       $this->link();
                                                       checked($this->value(), $value);
                                                       ?> />
                         <img src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                     </label>
                 </li>
                 <?php
             endforeach;
             ?>
         </ul>
         <?php

    }
  }

  /*

    Blog Listing Type

   */

   $wp_customize->add_section(
                     'blog_listing_settings', array(
                       'title' => __('Blog Listing Settings'),
                       'description' => __('Select type of layout'),
                       'priority' => 60,
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

//    $wp_customize->add_control(new qs_custom_img_control($wp_customize, 'listing_type', array(
//    'type' => 'radio',
//    'label' => esc_html__('Select default layout', 'theme-textdomain'),
//    'section' => 'blog_listing_settings',
//    'settings' => 'listing_type',
//    'choices' => array(
//        'brick-listing-type' => get_template_directory_uri() . '/admin/customizer/img/brick.jpg',
//        'two-column-listing-type' => get_template_directory_uri() . '/admin/customizer/img/two-column.jpg',
//        'classic-listing-type' => get_template_directory_uri() . '/admin/customizer/img/classic.jpg',
//        'masonry-listing-type' => get_template_directory_uri() . '/admin/customizer/img/brick.jpg',
//        'card-listing-type' => get_template_directory_uri() . '/admin/customizer/img/brick.jpg',
//    )
// )));


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

     $wp_customize->add_control( 'listing_type', array(
         'type' => 'radio',
         'section' => 'blog_listing_settings', // Add a default or your own section
         'label' => __( 'Custom Radio Selection' ),
         'description' => __( 'This is a custom radio input.' ),
         'choices' => array(
           'brick-listing-type' => __( 'Brick Listing' ),
           'two-column-listing-type' => __( 'Two Column Listing' ),
           'classic-listing-type' => __( 'Classic Listing' ),
           'masonry-listing-type' => __( 'Masonry Listing' ),
           'card-listing-type' => __( 'Card Listing' )
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
