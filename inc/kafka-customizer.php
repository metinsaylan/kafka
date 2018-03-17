<?php
class kafka_Customize {
   public static function register ( $wp_customize ) {
     $wp_customize->add_section( 'kafka_typography',
        array(
           'title'       => __( 'Ⓦ KΛfKΛ Typography', 'kafka' ),
           'priority'    => 35,
           'capability'  => 'edit_theme_options',
           'description' => __('Edit text settings on your site.', 'kafka'),
        )
     );

     $wp_customize->add_setting( 'kafka_google_fonts',
     		array(
     			'default'            => 'Roboto+Condensed:700|Roboto+Slab:400,600',
     			'sanitize_callback'  => 'sanitize_text_field',
          'description' => 'Add google font import statements to css.'
     		)
     	);

      	$wp_customize->add_control( 'kafka_google_fonts',
      		array(
      			'section'  => 'kafka_typography',
      			'label'    => 'Google Fonts Import',
      			'type'     => 'text'
      		)
      	);

        $wp_customize->add_setting( 'kafka_font_size',
        		array(
        			'default'            => '16px',
        			'sanitize_callback'  => 'sanitize_text_field',
              'transport'          => 'postMessage'
        		)
        	);

          $wp_customize->add_control( 'kafka_font_size',
         		array(
         			'section'  => 'kafka_typography',
         			'label'    => 'Base Font Size',
         			'type'     => 'text'
         		)
         	);


      $wp_customize->add_section( 'kafka_options',
         array(
            'title'       => __( 'Ⓦ KΛfKΛ Options', 'kafka' ),
            'priority'    => 36,
            'capability'  => 'edit_theme_options',
            'description' => __('Customize appearance of KΛfKΛ.', 'kafka'),
         )
      );













      $wp_customize->add_section( 'kafka_ads',
         array(
            'title'       => __( 'Ⓦ KΛfKΛ Ads', 'kafka' ),
            'priority'    => 37,
            'capability'  => 'edit_theme_options',
            'description' => __('Ad codes for ad areas on sidebar and post pages.', 'kafka'),
         )
      );

      $wp_customize->remove_setting( 'background_color' );

/* Ads */
$wp_customize->add_setting( 'kafka_sidebar_adcode', array(
  'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => '',
) );

$wp_customize->add_control( 'kafka_sidebar_adcode', array(
  'type' => 'textarea',
  'section' => 'kafka_ads',
  'label' => __( 'Sidebar Ad Code' ),
  'description' => __( 'Insert Sidebar Ad Code Here.' ),
) );

$wp_customize->add_setting( 'kafka_banner_adcode', array(
  'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => '',
) );

$wp_customize->add_control( 'kafka_banner_adcode', array(
  'type' => 'textarea',
  'section' => 'kafka_ads',
  'label' => __( 'Banner Ad Code' ),
  'description' => __( 'Insert Banner Ad Code Here.' ),
) );

/* Footer Text */

/* Spacing */
$wp_customize->add_setting(
		'kafka_global_padding',
		array(
			'default'            => '30px',
			'sanitize_callback'  => 'sanitize_text_field',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'kafka_global_padding',
		array(
			'section'  => 'kafka_options',
			'label'    => 'Global Spacing',
			'type'     => 'text'
		)
	);

  $wp_customize->add_setting(
  		'kafka_global_border',
  		array(
  			'default'            => '3px',
  			'sanitize_callback'  => 'sanitize_text_field',
  			'transport'          => 'postMessage'
  		)
  	);

  	$wp_customize->add_control(
  		'kafka_global_border',
  		array(
  			'section'  => 'kafka_options',
  			'label'    => 'Global Border',
  			'type'     => 'text'
  		)
  	);

    $wp_customize->add_setting(
    		'kafka_global_shadow',
    		array(
    			'default'            => '0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08); border-radius: 2px',
    			'sanitize_callback'  => 'sanitize_text_field',
    			'transport'          => 'postMessage'
    		)
    	);

    	$wp_customize->add_control(
    		'kafka_global_shadow',
    		array(
    			'section'  => 'kafka_options',
    			'label'    => 'Global CSS Box Shadow',
    			'type'     => 'text'
    		)
    	);


      $wp_customize->add_setting(
          'kafka_footer_text',
          array(
            'default'            => '&copy; 2018  <a href="' . get_bloginfo( 'url' )  . '" class="muted">' . get_bloginfo( 'name' ) . '</a> - ' . get_bloginfo( 'description' ),
            'sanitize_callback'  => 'sanitize_text_field',
            'transport'          => 'postMessage'
          )
        );

        $wp_customize->add_control(
          'kafka_footer_text',
          array(
            'section'  => 'kafka_options',
            'label'    => 'Footer Text',
            'type'     => 'text'
          )
        );



    /* Colors */



      $wp_customize->add_setting( 'kafka_text_color',
         array(
            'default'    => '#333333',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
         )
      );

      $wp_customize->add_control( new WP_Customize_Color_Control(
         $wp_customize,
         'kafka_text_color',
         array(
            'label'      => __( 'Text Color', 'kafka' ),
            'settings'   => 'kafka_text_color',
            'priority'   => 5,
            'section'    => 'colors',
         )
      ) );

      $wp_customize->add_setting( 'kafka_link_color',
         array(
            'default'    => '#268bd2',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
         )
      );

      $wp_customize->add_control( new WP_Customize_Color_Control(
         $wp_customize,
         'kafka_link_color',
         array(
            'label'      => __( 'Link Color', 'kafka' ),
            'settings'   => 'kafka_link_color',
            'priority'   => 10,
            'section'    => 'colors',
         )
      ) );

      $wp_customize->add_setting( 'kafka_bgcolor_light',
         array(
            'default'    => '#f0f0f0',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
         )
      );

      $wp_customize->add_control( new WP_Customize_Color_Control(
         $wp_customize,
         'kafka_bgcolor_light',
         array(
            'label'      => __( 'Background Light Color', 'kafka' ),
            'settings'   => 'kafka_bgcolor_light',
            'priority'   => 10,
            'section'    => 'colors',
         )
      ) );

      $wp_customize->add_setting( 'kafka_bgcolor_dark',
         array(
            'default'    => '#e6e6e6',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
         )
      );

      $wp_customize->add_control( new WP_Customize_Color_Control(
         $wp_customize,
         'kafka_bgcolor_dark',
         array(
            'label'      => __( 'Background Dark Color', 'kafka' ),
            'settings'   => 'kafka_bgcolor_dark',
            'priority'   => 11,
            'section'    => 'colors',
         )
      ) );

      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
   }

   public static function header_output() {
      ?>
      <style type="text/css">
           <?php self::generate_css( '.sidebar a, .e-content a', 'color', 'kafka_link_color' ); ?>
      </style>
      <?php
   }

   public static function live_preview() {
      wp_enqueue_script(
           'kafka-themecustomizer',
           get_template_directory_uri() . '/assets/js/kafka-customizer.js',
           array(  'jquery', 'customize-preview' ),
           '',
           true
      );
   }

    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'kafka_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'kafka_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'kafka_Customize' , 'live_preview' ) );
