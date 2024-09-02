<?php

/* Template Name: Team */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div id="members">
		
			<?php
			
				$posts = get_posts(array(

					'numberposts' => -1,
					'post_type' => 'staff',
					'orderby' => 'menu_order',
					'order' => 'ASC'
					
				));

				if($posts) {
			
					foreach($posts as $post) {

						$staff_thumbnail = wp_get_attachment_image_src(get_field('staff_thumbnail'), 'full');
						$staff_thumbnail_bw = wp_get_attachment_image_src(get_field('staff_thumbnail_bw'), 'full');

						$position = get_field('position');

					?>

						<div class="member">
	
							<a href="<?php echo get_permalink($post->ID); ?>">

								<img class="photo" src="<?php echo $staff_thumbnail_bw[0] ?>" alt="<?php get_the_title($post->ID); ?>" />
	
								<img src="<?php echo $staff_thumbnail[0] ?>" alt="<?php get_the_title($post->ID); ?>" />
	
								<div class="overlay">
	
									<h3><?php echo get_the_title($post->ID); ?></h3>
				
									<h4><?php echo $position ?></h4>
	
								</div>
	
							</a>
	
						</div>
						
					<?php
			
					}
			
				}
			
			?>
			
			<div class="member"></div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
