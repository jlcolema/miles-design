<?php

/* Template Name: Individual */

?>

<?php get_header(); ?>

	<div class="nav-return">

		<div class="prev"><a href="/about/team"><span class="arrow">&larr;</span> <span class="back-to">Back to <strong>The Team</strong></span></a></div>

	</div>

	<section class="individual">

		<div class="row">

			<div>

				<div class="contact-info">

					<h2 class="name"><?php the_title(); ?></h2>

					<h3 class="position"><?php print_custom_field('position'); ?></h3>

					<?php
					
						$title = get_the_title();
						$title_array = explode(' ', $title);
						$first_name = $title_array[0];

					?>

					<h4 class="connect-with">Connect with <?php echo $first_name ?></h4>

					<?php if (
					
						strlen(get_post_meta($post->ID, 'facebook', true)) ||
						strlen(get_post_meta($post->ID, 'google_plus', true)) ||
						strlen(get_post_meta($post->ID, 'linked_in', true)) ||
						strlen(get_post_meta($post->ID, 'twitter', true)) ) {
						
					?>

						<ul class="connect">
	
							<?php if (strlen(get_post_meta($post->ID, 'twitter', true))) { ?>
	
								<li class="twitter"><a href="<?php echo get_post_meta($post->ID, 'twitter', true) ?>" rel="external">Twitter</a></li>
	
							<?php } ?>

							<?php if (strlen(get_post_meta($post->ID, 'linked_in', true))) { ?>
	
								<li class="linkedin"><a href="<?php echo get_post_meta($post->ID, 'linked_in', true) ?>" rel="external">LinkedIn</a></li>
	
							<?php } ?>

							<?php if (strlen(get_post_meta($post->ID, 'facebook', true))) { ?>
	
								<li class="facebook"><a href="<?php echo get_post_meta($post->ID, 'facebook', true) ?>" rel="external">Facebook</a></li>
	
							<?php } ?>

							<?php if (strlen(get_post_meta($post->ID, 'google_plus', true))) { ?>
	
								<li class="google"><a href="<?php echo get_post_meta($post->ID, 'google_plus', true) ?>" rel="external">Google+</a></li>
	
							<?php } ?>

							<?php if (strlen(get_post_meta($post->ID, 'amazon', true))) { ?>
	
								<li class="amazon"><a href="<?php echo get_post_meta($post->ID, 'amazon', true) ?>" rel="external">Amazon Author Page</a></li>
	
							<?php } ?>

						</ul>

					<?php } ?>

				</div>

			</div>

			<div>

				<div class="bio">

					<div class="photo">

						<?php
				
							$imageName = 'profile_image';

							if( MultiPostThumbnails::has_post_thumbnail('staff', $imageName, $post->ID) ){

								$image_id = MultiPostThumbnails::get_post_thumbnail_id('staff',$imageName,$post->ID);
								$image_url = wp_get_attachment_url($image_id, 'full');
						
								// get attachment info

								$attachment 	= get_post($image_id);
								$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

								echo '<img src="' . $image_url . '" alt="' . $alt . '" />';

							} else {

								echo '<img src="/wp-content/themes/milesdesign/-/media/example-fallback-photo.jpg" alt="New photo coming soon." />';

							}

						?>

					</div>

					<?php the_content(); ?>

				</div>

			</div>

		</div>

	</section>

	<div class="nav-browse">

		<?php

			$prev_post = get_previous_post();

			if ($prev_post) {
			
				$temp_staff = get_post($prev_post->ID);
				$temp_class_name = ' ' .sanitize_title_with_dashes($temp_staff->post_title);

				$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));

				echo '<div class="prev' . $temp_class_name . '">';

					echo '<a href="' . get_permalink($prev_post->ID) . '" rel="prev"><span class="arrow">&laquo;</span> <strong class="name">'. $prev_title . '</strong></a>';

				echo '</div>';

			}

			$next_post = get_next_post();

			if ($next_post) {
			
				$temp_staff = get_post($prev_post->ID);
				$temp_class_name = ' ' .sanitize_title_with_dashes($temp_staff->post_title);

				$next_title = strip_tags(str_replace('"', '', $next_post->post_title));

				echo '<div class="next' . $temp_class_name . '">';

					echo '<a href="' . get_permalink($next_post->ID) . '" rel="next"><strong class="name">'. $next_title . '</strong> <span class="arrow">&raquo;</span></a>';

				echo '</div>';

			}

		?>

	</div>

<?php get_footer(); ?>
