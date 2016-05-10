<?php
function health_home_page_customizer( $wp_customize ) {

/* Header Section */
	$wp_customize->add_panel( 'home_page_setting', array(
		'capability'     => 'edit_theme_options',
		'priority'   => 500,
		'title'      => __('Home Page Settings', 'health-center-lite'),
	) );

	
 
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Slider Setting','health-center-lite'),
            'description' => '',
			'panel'  => 'home_page_setting',)
    );
	
	
	$wp_customize->add_setting( 'hc_lite_options[home_page_image]',array('default' => get_template_directory_uri().'/images/slide1.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[home_page_image]',
			array(
				'type'        => 'upload',
				'label' => 'Image Upload',
				'section' => 'example_section_one',
				'settings' =>'hc_lite_options[home_page_image]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
//Service
$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service Setting ', 'health-center-lite'),
		'panel'  => 'home_page_setting',
   	) );

//Sarvice title
	$wp_customize->add_setting(
    'hc_lite_options[service_title]',
    array(
        'default' => __('Awesome Services','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_title]',
    array(
        'label' => __('Service Title','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[service_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem ipsum dolor sit amet.','health-center-lite'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_description]',
    array(
        'label' => __('Service Description','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	$wp_customize->add_setting(
		'hc_lite_options[service_one_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-wheelchair',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[service_one_icon]', array(
        'label'   => __('Service Icon One', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	

	$wp_customize->add_setting(
		'hc_lite_options[home_service_one_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_service_one_link]', array(
        'label'   => __('Home service one page and icon Link', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_service_one_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_service_one_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'service_section_head',
		)
	); 
	
	
	$wp_customize->add_setting(
    'hc_lite_options[service_one_title]',
    array(
        'default' => __('Medical Guidance','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_one_title]',
    array(
        'label' => __('Service One Title','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[service_one_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipricies sem Unlimited ColorsCras pulvin, maurisoicituding adipiscing, Lorem ipsum dolor sit amet, consect adipiscing elit, sed diam nonummy nibh euis udin','health-center-lite'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_one_description]',
    array(
        'label' => __('Service One Description','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
//Service Two
	$wp_customize->add_setting(
		'hc_lite_options[service_two_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-medkit',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[service_two_icon]', array(
        'label'   => __('Service Icon Two', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	

	$wp_customize->add_setting(
		'hc_lite_options[home_service_two_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_service_two_link]', array(
        'label'   => __('Enter the Home Service Two icon and title link.', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_service_two_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_service_two_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'service_section_head',
		)
	); 
	
	
	$wp_customize->add_setting(
    'hc_lite_options[service_two_title]',
    array(
        'default' => __('Emergency Help','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_two_title]',
    array(
        'label' => __('Service Two Title','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[service_two_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipricies sem Unlimited ColorsCras pulvin, maurisoicituding adipiscing, Lorem ipsum dolor sit amet, consect adipiscing elit, sed diam nonummy nibh euis udin','health-center-lite'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_two_description]',
    array(
        'label' => __('Service Two Description','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);

//Service three
$wp_customize->add_setting(
		'hc_lite_options[service_third_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-ambulance',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[service_third_icon]', array(
        'label'   => __('Service Icon Three', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	

	$wp_customize->add_setting(
		'hc_lite_options[home_service_third_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_service_third_link]', array(
        'label'   => __('Enter the Home Service Three icon and title link.', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_service_third_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_service_third_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'service_section_head',
		)
	); 
	
	
	$wp_customize->add_setting(
    'hc_lite_options[service_third_title]',
    array(
        'default' => __('Cardio Monitoring','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_third_title]',
    array(
        'label' => __('Service Three Title','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[service_third_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipricies sem Unlimited ColorsCras pulvin, maurisoicituding adipiscing, Lorem ipsum dolor sit amet, consect adipiscing elit, sed diam nonummy nibh euis udin','health-center-lite'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_third_description]',
    array(
        'label' => __('Service Three Description','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);	
	
//Service Four
$wp_customize->add_setting(
		'hc_lite_options[service_four_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-user-md',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[service_four_icon]', array(
        'label'   => __('Service Icon Four', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	

	$wp_customize->add_setting(
		'hc_lite_options[home_service_fourth_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_service_fourth_link]', array(
        'label'   => __('Enter the Home Service Four icon and title link.', 'health-center-lite'),
		'section' => 'service_section_head',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_service_fourth_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_service_fourth_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'service_section_head',
		)
	); 
	
	
	$wp_customize->add_setting(
    'hc_lite_options[service_four_title]',
    array(
        'default' => __('Medical Treatments','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_four_title]',
    array(
        'label' => __('Service Four Title','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'hc_lite_options[service_four_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipricies sem Unlimited ColorsCras pulvin, maurisoicituding adipiscing, Lorem ipsum dolor sit amet, consect adipiscing elit, sed diam nonummy nibh euis udin','health-center-lite'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[service_four_description]',
    array(
        'label' => __('Service Four Description','health-center-lite'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);	
		

//Portfolio setting
$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Project Setting','health-center-lite'),
            'description' => '',
			'panel'  => 'home_page_setting',)
    );

//Show and hide Project section
	$wp_customize->add_setting(
	'hc_lite_options[home_projects_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'hc_lite_options[home_projects_enabled]',
    array(
        'label' => __('Enable Home Project Section','health-center-lite'),
        'section' => 'project_section_settings',
        'type' => 'checkbox',
    )
	);
	

$wp_customize->add_setting(
    'hc_lite_options[project_heading_one]',
    array(
        'default' => __('Featured Portfolio Projects','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('hc_lite_options[project_heading_one]',array(
    'label'   => __('Project Section Heading','health-center-lite'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );	
	 
	//Project Description 
	 $wp_customize->add_setting(
    'hc_lite_options[project_tagline]',
    array(
        'default' => __('Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'hc_lite_options[project_tagline]',array(
    'label'   => __('Project Section Tagline','health-center-lite'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 
	 //Project one image
	$wp_customize->add_setting( 'hc_lite_options[project_one_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[project_one_thumb]',
			array(
				'label' => 'Project One Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'hc_lite_options[project_one_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	$wp_customize->add_setting(
	'hc_lite_options[project_one_title]', array(
        'default'        => __('Lorem Ipsum','health-center-lite'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_one_title]', array(
        'label'   => __('Project One Title', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	 //Project one Description
	$wp_customize->add_setting(
	'hc_lite_options[project_one_text]', array(
        'default'        => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_one_text]', array(
        'label'   => __('Project One Description', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'textarea',
    ));
	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_one_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_image_one_link]', array(
        'label'   => __('Home project one page image Link.', 'health-center-lite'),
		'section' => 'project_section_settings',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_one_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_image_one_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'project_section_settings',
		)
	); 
	
	//Project two
	//Project two image
	$wp_customize->add_setting( 'hc_lite_options[project_two_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[project_two_thumb]',
			array(
				'label' => 'Project Two Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'hc_lite_options[project_two_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'hc_lite_options[project_two_title]', array(
        'default'        => __('Postao je popularan','health-center-lite'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_two_title]', array(
        'label'   => __('Project Two Title', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	 
	 //Project Two Description
	$wp_customize->add_setting(
	'hc_lite_options[project_two_text]', array(
        'default'        => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_two_text]', array(
        'label'   => __('Project Two Description', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'textarea',
    ));
	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_two_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_image_two_link]', array(
        'label'   => __('Home project two page image Link.', 'health-center-lite'),
		'section' => 'project_section_settings',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_two_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_image_two_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'project_section_settings',
		)
	); 
	
	
	//Project three
	//Project three image
	$wp_customize->add_setting( 'hc_lite_options[project_three_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[project_three_thumb]',
			array(
				'label' => 'Project Three Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'hc_lite_options[project_three_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'hc_lite_options[project_three_title]', array(
        'default'        => __('kojekakve promjene s','health-center-lite'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_three_title]', array(
        'label'   => __('Project Three Title', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	 //Project one Description
	$wp_customize->add_setting(
	'hc_lite_options[project_three_text]', array(
        'default'        => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_three_text]', array(
        'label'   => __('Project Three Description', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'textarea',
    ));
	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_three_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_image_three_link]', array(
        'label'   => __('Home project three page image Link.', 'health-center-lite'),
		'section' => 'project_section_settings',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_three_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_image_three_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'project_section_settings',
		)
	); 
	
	//Project four
	//Project four image
	$wp_customize->add_setting( 'hc_lite_options[project_four_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hc_lite_options[project_four_thumb]',
			array(
				'label' => 'Project Four Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'hc_lite_options[project_four_thumb]',
				'section' => 'project_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	$wp_customize->add_setting(
	'hc_lite_options[project_four_title]', array(
        'default'        => __('kojekakve promjene s','health-center-lite'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_four_title]', array(
        'label'   => __('Project Four Title', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'text',
    ));
	
	
	
	 //Project one Description
	$wp_customize->add_setting(
	'hc_lite_options[project_four_text]', array(
        'default'        => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('hc_lite_options[project_four_text]', array(
        'label'   => __('Project Four Description', 'health-center-lite'),
        'section' => 'project_section_settings',
		'type' => 'textarea',
    ));
	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_four_link]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'hc_lite_options[home_image_four_link]', array(
        'label'   => __('Home project four page image Link.', 'health-center-lite'),
		'section' => 'project_section_settings',
        'type'    => 'text',
    ));	
	
	$wp_customize->add_setting(
		'hc_lite_options[home_image_four_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default'        => true,
		));

	$wp_customize->add_control(
		'hc_lite_options[home_image_four_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link new tab/window','health-center-lite'),
			'section' => 'project_section_settings',
		)
	); 
	
	//Recent News Section
	$wp_customize->add_section(
        'news_section_settings',
        array(
            'title' => __('Recent News Setting','health-center-lite'),
            'description' => '',
			'panel'  => 'home_page_setting',)
    );

	
	//News Title
	$wp_customize->add_setting(
    'hc_lite_options[head_news]',
    array(
        'default' => __('Recent News','health-center-lite'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('hc_lite_options[head_news]',array(
    'label'   => __('Recent News Section Heading','health-center-lite'),
    'section' => 'news_section_settings',
	 'type' => 'text',
	 )  );
	
	
	
	
	}
	add_action( 'customize_register', 'health_home_page_customizer' );
	?>