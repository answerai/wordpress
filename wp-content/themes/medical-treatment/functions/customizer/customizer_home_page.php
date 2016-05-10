<?php
function medical_treatment_home_page_customizer( $wp_customize ) {


/* Header Section */
	$wp_customize->add_panel( 'home_page_setting', array(
		'capability'     => 'edit_theme_options',
		'priority'   => 500,
		'title'      => __('Home Page Settings', 'medical-treatment'),
	) );

	
 
	$wp_customize->add_section(
        'medical_treatment_slider_section_settings',
        array(
            'title' => __('Slider Setting','medical-treatment'),
            'description' => '',
			'panel'  => 'home_page_setting',)
    );

	
	
	$wp_customize->add_setting( 'hc_lite_options[hc_home_page_image]',array('default' => get_stylesheet_directory_uri().'/images/slide1.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[hc_home_page_image]',
			array(
				'type'        => 'upload',
				'label' => 'Image Upload',
				'settings' =>'hc_lite_options[hc_home_page_image]',
				'section' => 'medical_treatment_slider_section_settings',
				
			)
		)
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[home_image_title]',
    array(
        'default' => __('We Care for Your Health !','medical-treatment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[home_image_title]',
    array(
        'label' => __('Slider Title','medical-treatment'),
        'section' => 'medical_treatment_slider_section_settings',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[home_image_description]',
    array(
        'default' => __('If you need a doctor for to consec tetuer Lorem ipsum dolor, consectetur adipiscing elit.','medical-treatment'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[home_image_description]',
    array(
        'label' => __('Slider Description','medical-treatment'),
        'section' => 'medical_treatment_slider_section_settings',
        'type' => 'textarea',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);

	$wp_customize ->add_setting (
	'hc_lite_options[slider_readmore_text]',
	array( 
	'default' => __('Read More','medical-treatment'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'hc_lite_options[slider_readmore_text]',
	array (  
	'label' => __('Read More Button Label Text','medical-treatment'),
	'section' => 'medical_treatment_slider_section_settings',
	'type' => 'text',
	) );
	
	$wp_customize ->add_setting (
	'hc_lite_options[slider_image_readmore_link]',
	array( 
	'default' => __('#','medical-treatment'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	) );

	$wp_customize->add_control (
	'hc_lite_options[slider_image_readmore_link]',
	array (  
	'label' => __('Read More Button Link','medical-treatment'),
	'section' => 'medical_treatment_slider_section_settings',
	'type' => 'text',
	) );

	$wp_customize->add_setting(
		'hc_lite_options[slider_image_readmore_ink_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => true ,
		'type' => 'option',
		
		));

	$wp_customize->add_control(
		'hc_lite_options[slider_image_readmore_ink_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','medical-treatment'),
			'section' => 'medical_treatment_slider_section_settings',
		)
	);
	 
	}
	add_action( 'customize_register', 'medical_treatment_home_page_customizer' );
	?>