<div id="featured">

	<div class="wrap">
	
		<div class="projects">
		
			<?php
			
				$args = array(

					'numberposts' => 3,
					'post_type' => 'featured-projects',
					'orderby' => 'menu_order',
					'order' => 'ASC'
					
				);
				
				$posts = get_posts($args);

				if( $posts ) {
				
					foreach($posts as $post) {
					
						// get client id

						$client_id = get_post_meta($post->ID, 'featured_client', true);

						$client_id = $client_id[0];
						
						$clients = get_post($client_id);
						
						$client_logo = wp_get_attachment_image_src(get_field('client_logo', $client_id), 'full');
						$featured_project_thumbnail = wp_get_attachment_image_src(get_field('featured_project_thumbnail', $client_id), 'full');
	
						echo '<div class="project">';
	
							echo '<a href="' . get_permalink($clients->ID) . '">';
	
								echo '<img src="' . $featured_project_thumbnail[0] . '" alt="" />';

								echo '<img class="client-logo" src="' . $client_logo[0] . '" alt="' . get_the_title($clients->ID) . '" />';

								echo '<div class="overlay">';

									echo '<h3>' . get_the_title($clients->ID) . '</h3>';

								echo '</div>';

							echo '</a>';
	
						echo '</div>';
						
					}
				
				}
			
			?>
		
		</div>
	
	</div>

</div>