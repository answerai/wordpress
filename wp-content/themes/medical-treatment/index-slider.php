<?php
	$hc_lite_options=medical_treatment_theme_data_setup(); 
	$current_options = wp_parse_args(  get_option( 'hc_lite_options', array() ), $hc_lite_options );
	if($current_options['hc_home_page_image']!='') { 
	?>
	<div class="row" style="position:relative" >	
		<img src="<?php echo esc_url($current_options['hc_home_page_image']); ?>" class="img-responsive" />
		<div class="slide-caption">
			<div class="slide-text-bg1"><h1><?php if(isset($current_options['home_image_title']))	{ echo esc_attr($current_options['home_image_title']); } else { _e('Heart Specialist','medical-treatment'); } ?></h1>
			</div>
			<div class="slide-text-bg2"><span><?php if(isset($current_options['home_image_description']))	{ echo esc_attr( $current_options['home_image_description']); } else { _e('If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros  adipiscing elit Ut volutpat.','medical-treatment'); } ?></span>
			</div>
			<?php 
			if($current_options['slider_readmore_text'] != '') { ?>
					<div class="slide-btn-area-sm">
					<a <?php  if($current_options['slider_image_readmore_ink_target'] == true ) { echo "target='_blank'"; }  ?> href="<?php if($current_options['slider_image_readmore_link']) { echo esc_attr($current_options['slider_image_readmore_link']);  } ?>" class="slide-btn-sm">
					<span><?php echo esc_attr($current_options['slider_readmore_text']); ?></span>
					</a>
					</div>
					<?php } ?>
		</div>
	</div>
<?php } ?>