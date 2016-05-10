<div class="container home_post">
	<?php 
	$hc_lite_options=theme_data_setup(); 
	$current_options = wp_parse_args(  get_option( 'hc_lite_options', array() ), $hc_lite_options );
	?>
	<div class="row">
		<!--Recent News-->
		<div class="col-md-12">	
			<div class="hc_heading_title">
			<?php if($current_options['head_news']!='') { ?> 
			<h3><?php echo esc_attr($current_options['head_news']); ?>	</h3><?php } ?>		
			</div>
			<?php 
			$args = array( 'post_type' => 'post', 'ignore_sticky_posts' => 1); 	
			query_posts( $args );
			if(query_posts( $args ))
			{	while(have_posts()):the_post();
				{  ?>
			<div class="media hc_post_area">			
				<aside class="hc_post-date-type">
					<div class="date entry-date updated">
						<div class="day"><?php  echo get_the_date('d'); ?></div>
						<div class="month-year"><?php the_time('M, Y'); ?></div>
					</div>
				</aside>
				<div class="media-body">
					<h4><a href="<?php the_permalink(); ?>" title="webriti" ><?php the_title(); ?></a></h4>
					<p><?php echo the_content(); ?></p>
				</div>
			</div>			
			<?php } endwhile; 
			} else  {
			echo "No Posts to show...";
			} ?>
		</div><!--/Recent News-->
	</div>
</div>	