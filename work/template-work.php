<?php

/* Template Name: Work */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div class="projects">
		
			<?php

				$posts = get_posts(array(

					'numberposts' => -1,
					'post_type' => 'work',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'show_on_work_page',
							'value' => '"Yes"',
							'compare' => 'LIKE'
						)
					)
					
				));

				if($posts) {

					foreach($posts as $post) {

						$client_logo = wp_get_attachment_image_src(get_field('client_logo'), 'full');
						$featured_project_thumbnail = wp_get_attachment_image_src(get_field('featured_project_thumbnail'), 'full');
					?>

						<div class="project">
	
							<a href="<?php echo get_permalink($post->ID); ?>">

								<?php /* // Logo Image */ ?>

								<img class="client-logo" src="<?php echo $client_logo[0] ?>" alt="<?php get_the_title($post->ID); ?>" />

								<?php /* // Hover Image */ ?>
								
								<img src="<?php echo $featured_project_thumbnail[0]; ?>" alt="" />

								<div class="overlay">

									<h3><?php echo get_the_title($post->ID); ?></h3>

								</div>

							</a>
	
						</div>
						
					<?php

					}

				}

			?>

			<div class="project"></div>

		</div>
	
	</div>

<?php get_footer(); ?>