<?php

/* Topbar settings for sidebar header layout */
$wp_customize->add_setting( 'qt_topbar_bg_sidebar',
	array( 
	    'transport'				=> 'refresh',
		'sanitize_callback' 	=> 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_topbar_bg_sidebar',
		array(
			'label'       		=> esc_html__( 'Header background color', 'the-landscaper-wp' ),
			'section'     		=> 'qt_section_header',
			'settings'    		=> 'qt_topbar_bg_sidebar',
			'priority'    		=> 85,
			'active_callback' 	=> array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_topbar_textcolor_sidebar',
	array(
	    'default'     			=> '#7d7d7d',
        'transport'				=> 'refresh',
	    'sanitize_callback' 	=> 'sanitize_hex_color'
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_topbar_textcolor_sidebar', 
		array(
			'label' 			=> esc_html__( 'Header text color', 'the-landscaper-wp' ),
			'section' 			=> 'qt_section_header',
			'settings' 			=> 'qt_topbar_textcolor_sidebar',
			'priority' 			=> 90,
			'active_callback' 	=> array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

/* Navigation settings for sidebar header layout */
$wp_customize->add_setting( 'qt_nav_bg_sidebar',
	array(
		'default' 			=> '#3a3a39',
		'transport'			=> 'refresh',
	    'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_bg_sidebar', 
		array(
			'label'         => esc_html__( 'Navigation background color', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_bg_sidebar',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_nav_active_line',
	array(
		'default' 			=> '#c7d990',
		'transport'			=> 'refresh',
	    'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_active_line', 
		array(
			'label'         => esc_html__( 'Navigation active & hover line', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_active_line',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_nav_textcolor_sidebar',
	array(
	    'default'    		=> '#ffffff',
	    'transport'			=> 'refresh',
	    'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_textcolor_sidebar',
		array(
			'label'      	=> esc_html__( 'Navigation link color', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_textcolor_sidebar',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_nav_textcolor_hover_sidebar',
	array(
	    'transport'			=> 'refresh',
	    'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_textcolor_hover_sidebar',
		array(
			'label'      	=> esc_html__( 'Navigation link hover color', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_textcolor_hover_sidebar',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_nav_submenu_bg_sidebar', 
	array(
		'default' 			=> '#a2c046',
		'transport'			=> 'refresh',
    	'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_submenu_bg_sidebar', 
		array(
			'label'       	=> esc_html__( 'Submenu background color', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_submenu_bg_sidebar',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);

$wp_customize->add_setting( 'qt_nav_submenu_textcolor_sidebar',
	array(
    	'default'     		=> '#ffffff',
    	'transport'			=> 'refresh',
    	'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 'qt_nav_submenu_textcolor_sidebar',
		array(
			'label'       	=> esc_html__( 'Submenu link color', 'the-landscaper-wp' ),
			'section'     	=> 'qt_section_navigation',
			'settings'    	=> 'qt_nav_submenu_textcolor_sidebar',
			'active_callback' => array( $this, 'thelandscaper_show_settings_header_sidebar' ),
		)
	)
);