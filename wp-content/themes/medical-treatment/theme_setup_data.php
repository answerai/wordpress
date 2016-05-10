<?php
function medical_treatment_theme_data_setup()
{	
	return $medical_treatment_theme_options=array(
			
			'hc_home_page_image' => get_stylesheet_directory_uri() .'/images/slide1.jpg',
			'home_image_title' => __('We Care for Your Health !','medical-treatment'),
			'home_image_description' => __('If you need a doctor for to consec tetuer Lorem ipsum dolor, consectetur adipiscing elit.','medical-treatment'),
			'slider_readmore_text' => __('Read More','medical-treatment'),
			'slider_image_readmore_link'=> '#',
			'slider_image_readmore_ink_target' => true,
	);
}
?>