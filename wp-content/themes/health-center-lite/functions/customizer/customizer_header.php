<?php
function health_header_customizer( $wp_customize ) {

class health_Customize_google_analytics_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want To Add Google Analytics Code Then','health-center-lite'); ?><a href="<?php echo esc_url( 'http://webriti.com/healthcentre/' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','health-center-lite'); ?> </a>  
		<?php
		}
	}
/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 300,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header Settings', 'health-center-lite'),
	) );
	
//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header Logo setting', 'health-center-lite'),
		'panel'  => 'header_options',
		'priority'   => 300,
   	) );
	$wp_customize->add_setting(
		'hc_lite_options[upload_image_logo]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
		
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'hc_lite_options[upload_image_logo]',
			   array(
				   'label'          => __( 'Upload a 150x150 for Logo Image', 'health-center-lite' ),
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Enable/Disable logo text
	$wp_customize->add_setting(
    'hc_lite_options[hc_texttitle]',array(
	'default'    => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'hc_lite_options[hc_texttitle]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disabe Text Logo','health-center-lite'),
        'section' => 'header_logo',
		'priority'   => 100,
    )
	);
	
	
	//Logo width
	
	$wp_customize->add_setting(
    'hc_lite_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 150,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'hc_lite_options[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Width','health-center-lite'),
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'hc_lite_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 50,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'hc_lite_options[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','health-center-lite'),
        'section' => 'header_logo',
		'priority'   =>410,
    )
	);
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom css', 'health-center-lite'),
		'panel'  => 'header_options',
		'priority'   => 100,
   	) );
	$wp_customize->add_setting(
	'hc_lite_options[webrit_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback'    => 'wp_filter_nohtml_kses',
		'sanitize_js_callback' => 'wp_filter_nohtml_kses',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'hc_lite_options[webrit_custom_css]', array(
        'label'   => __('Custom css snippet:', 'health-center-lite'),
        'section' => 'custom_css',
        'type' => 'textarea',
    )); 

	$wp_customize->add_section(
        'header_contact_setting',
        array(
            'title' => 'Hedaer Contact Detail Setting ',
           'priority'    => 400,
			'panel' => 'header_options',
        )
    );
	}
	add_action( 'customize_register', 'health_header_customizer' );
	?>