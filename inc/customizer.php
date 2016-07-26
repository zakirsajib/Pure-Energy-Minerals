<?php
/**
 * pem Theme Customizer.
 *
 * @package pem
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pem_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Remove Existing sections
	$wp_customize->remove_section('background_image');
		
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	// Add Logo on Customizer's existing section 'title_tagline'
	$wp_customize->add_setting( 'header_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'header_logo',
	        array(
	            'label' => 'Logo Upload',
	            'section' => 'title_tagline',
	            'settings' => 'header_logo',
	            'description' => 'Recommended Size: 439 x 209 pixels. Preferred Image format is SVG',
	        )
	    )
	);
	$wp_customize->add_setting( 'mobile_header_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'mobile_header_logo',
	        array(
	            'label' => 'Mobile Version Logo Upload',
	            'section' => 'title_tagline',
	            'settings' => 'mobile_header_logo',
	            'description' => 'Recommended Size: 290 x 108 pixels. Preferred Image format is SVG',
	        )
	    )
	);
	
	// Footer Panel
	$wp_customize->add_panel( 'footer_panel', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'pem' ),
	    'description' => __( 'Description of what this panel does.', 'pem' ),
	) );
	$wp_customize->add_section( 'section_copyright', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Copyright', 'pem' ),
			'description' => '',
			'panel' => 'footer_panel',
	) );
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'copyright_text', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_copyright',
	    'label' => __( 'Copyright Info Field', 'pem' ),
	    'description' => '',
	) );
	
	// Google Analytics
	$wp_customize->add_section( 'section_google_analytics', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Google Analytics', 'pem' ),
			'description' => '',
			'panel' => 'footer_panel',
	) );
	$wp_customize->add_setting( 'google_analytics_code', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'google_analytics_code', array(
	    'type' => 'textarea',
	    'priority' => 10,
	    'section' => 'section_google_analytics',
	    'label' => __( 'Google Analytics Code', 'pem' ),
	    'description' => 'Copy and Paste Google Analytics Code here',
	) );
	// Signup Panel
	$wp_customize->add_panel( 'signup_panel', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Sign up', 'pem' ),
	    'description' => __( 'Description of what this panel does.', 'pem' ),
	) );
	$wp_customize->add_section( 'section_signup', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Signup', 'pem' ),
		'description' => '',
		'panel' => 'signup_panel',
	) );
	$wp_customize->add_setting( 'signup_heading', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'signup_heading', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_signup',
	    'label' => __( 'Sign up Title 1', 'pem' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'signup_heading_2', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'signup_heading_2', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_signup',
	    'label' => __( 'Sign up Title 2', 'pem' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'signup_button', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'signup_button', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_signup',
	    'label' => __( 'Sign up Button Label', 'pem' ),
	    'description' => '',
	) );
	// Latest News & Posts
	$wp_customize->add_panel( 'latest_news_panel', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Latest News & Posts', 'pem' ),
	    'description' => __( 'Description of what this panel does.', 'pem' ),
	) );
	$wp_customize->add_section( 'latest_news_section', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Latest News & Posts', 'pem' ),
		'description' => '',
		'panel' => 'latest_news_panel',
	) );
	$wp_customize->add_setting( 'latest_news_heading', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'latest_news_heading', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'latest_news_section',
	    'label' => __( 'Heading / Title', 'pem' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'latest_news_sub', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'latest_news_sub', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'latest_news_section',
	    'label' => __( 'Sub Heading', 'pem' ),
	    'description' => '',
	) );

}
add_action( 'customize_register', 'pem_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pem_customize_preview_js() {
	wp_enqueue_script( 'pem_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pem_customize_preview_js' );
