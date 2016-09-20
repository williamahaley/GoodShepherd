<?php
/**
 * Allow users to select Topbar or Offcanvas menu. Adds body class of offcanvas or topbar based on which they choose.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'wpt_register_theme_customizer' ) ) :
function wpt_register_theme_customizer( $wp_customize ) {

	// Create custom panels
	$wp_customize->add_panel( 'mobile_menu_settings', array(
	  'priority' => 1000,
	  'theme_supports' => '',
	  'title' => __( 'Mobile Menu Settings', 'foundationpress' ),
	  'description' => __( 'Controls the mobile menu', 'foundationpress' ),
	) );

	// Create custom field for mobile navigation layout
	$wp_customize->add_section( 'mobile_menu_layout' , array(
		'title'	=> __('Mobile navigation layout','foundationpress'),
		'panel' => 'mobile_menu_settings',
		'priority' => 1000,
	));

	// Set default navigation layout
	$wp_customize->add_setting(
		'wpt_mobile_menu_layout',
		array(
			'default'	=> __( 'topbar', 'foundationpress' ),
		)
	);

	// Add options for navigation layout
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mobile_menu_layout',
			array(
				'type'		=> 'radio',
				'section' 	=> 'mobile_menu_layout',
				'settings' 	=> 'wpt_mobile_menu_layout',
		        'choices' => array(
								'topbar' => 'Topbar',
		            'offcanvas' => 'Offcanvas',
		        ),
			)
		)
	);
	// Add options for navigation layout

}


add_action( 'customize_register', 'wpt_register_theme_customizer' );

// Add class to body to help w/ CSS
add_filter( 'body_class', 'mobile_nav_class' );
function mobile_nav_class( $classes ) {
	if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
		$classes[] = 'offcanvas';
	elseif ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) :
		$classes[] = 'topbar';
	endif;
	return $classes;
}
endif;

function wpt_register_theme_customizer_alt( $wp_customize ) {

    $wp_customize->add_section( 'custom_footer_text', array(
        'title'          => __( 'Footer Text' ),
        'priority'       => 1100,
        'description'    => __( '' ),
    ) );


    $wp_customize->add_setting( 'footer_text_address', array(
        'default'    => '231 N. Church St, Rocky Mount, NC 27804',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'footer_text_address', array(
        'label'      => __( 'Address' ),
        'section'    => 'custom_footer_text',
    ) );

     $wp_customize->add_setting( 'footer_text_telephone', array(
         'default'    => '252.442.1134',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_telephone', array(
         'label'      => __( 'Footer Text Telephone Number' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_disclosure', array(
         'default'    => 'The Church of the Good Shepherd and the Good Shepherd Day School are equal opportunity employers. The USDA is an equal opportunity provider and employer.',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_disclosure', array(
         'label'      => __( 'Footer Text Line Disclosure' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_cal_link', array(
         'default'    => '/resources/calendar/',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_cal_link', array(
         'label'      => __( 'Footer Text Calendar Link' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_map_link', array(
         'default'    => 'https://www.google.com/maps/place/231+N+Church+St,+Rocky+Mount,+NC+27804/@35.9458229,-77.7978464,17z',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_map_link', array(
         'label'      => __( 'Footer Text Map Link' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_dio_link', array(
         'default'    => 'http://www.dionc.org/',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_dio_link', array(
         'label'      => __( 'Footer Text Diocese Link' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_dio_link', array(
         'default'    => 'http://www.dionc.org/',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_dio_link', array(
         'label'      => __( 'Footer Text Diocese Link' ),
         'section'    => 'custom_footer_text',
     ) );

     $wp_customize->add_setting( 'footer_text_facebook_link', array(
         'default'    => 'https://www.facebook.com/Church-of-the-Good-Shepherd-Episcopal-Rocky-Mount-NC-246208660494/',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_dio_link', array(
         'label'      => __( 'Footer Text Facebook Link' ),
         'section'    => 'custom_footer_text',
     ) );

    $wp_customize->add_setting( 'footer_text_email_link', array(
         'default'    => 'https://visitor.r20.constantcontact.com/manage/optin?v=0013sqtWUZpMnGEoYXgaI4TjrWS8kwiVGsJyaaDpJuVzJUAGhvXxkn-FhoYVYjEZJa2iz0H_ypgScIPhr3vqO-31z9D-EOP9vDFKAeRqsEIJGfsonI2Mwwv8G4VV0vNvw5DDR3z3XnNDfXYR6_TspcweAIvnLS-zyryAOZKBN925LE%3D',
         'type'       => 'option',
         'capability' => 'manage_options',
     ) );

     $wp_customize->add_control( 'footer_text_email_link', array(
         'label'      => __( 'Footer Text Email Sign Up Link' ),
         'section'    => 'custom_footer_text',
     ) );

    $wp_customize->add_section( 'custom_front_page_links', array(
        'title'          => __( 'Front Page Links' ),
        'priority'       => 1050,
        'description'    => __( '' ),
    ) );

/* Link 1 */
    $wp_customize->add_setting( 'custom_fp_text_1', array(
        'default'    => 'Upcoming Events',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_text_1', array(
        'label'      => __( 'Custom Link Text 1' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_link_1', array(
        'default'    => '/calendar',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_link_1', array(
        'label'      => __( 'Custom Link 1' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_icon_1', array(
        'default'    => 'fa-calendar',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_icon_1', array(
        'label'      => __( 'Custom Link Icon 1' ),
        'section'    => 'custom_front_page_links',
    ) );


/* Link 2 */
    $wp_customize->add_setting( 'custom_fp_text_2', array(
        'default'    => 'LECTIONARY READINGS',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_text_2', array(
        'label'      => __( 'Custom Link Text 2' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_link_2', array(
        'default'    => '#',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_link_2', array(
        'label'      => __( 'Custom Link 2' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_icon_2', array(
        'default'    => 'fa-book',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_icon_2', array(
        'label'      => __( 'Custom Link Icon 2' ),
        'section'    => 'custom_front_page_links',
    ) );

/* Link 3 */
    $wp_customize->add_setting( 'custom_fp_text_3', array(
        'default'    => 'Online Donations',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_text_3', array(
        'label'      => __( 'Custom Link Text 3' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_link_3', array(
        'default'    => '#',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_link_3', array(
        'label'      => __( 'Custom Link 3' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_icon_3', array(
        'default'    => 'fa-heart',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_icon_3', array(
        'label'      => __( 'Custom Link Icon 3' ),
        'section'    => 'custom_front_page_links',
    ) );


/* Link 4 */
    $wp_customize->add_setting( 'custom_fp_text_4', array(
        'default'    => 'Annual Report 2014',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_text_4', array(
        'label'      => __( 'Custom Link Text 4' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_link_4', array(
        'default'    => '#',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_link_4', array(
        'label'      => __( 'Custom Link 4' ),
        'section'    => 'custom_front_page_links',
    ) );

    $wp_customize->add_setting( 'custom_fp_icon_4', array(
        'default'    => 'fa-file-text-o',
        'type'       => 'option',
        'capability' => 'manage_options',
    ) );

    $wp_customize->add_control( 'custom_fp_icon_4', array(
        'label'      => __( 'Custom Link Icon 4' ),
        'section'    => 'custom_front_page_links',
    ) );


}

add_action( 'customize_register', 'wpt_register_theme_customizer_alt' );
