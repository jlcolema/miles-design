<?php

/* Template Name: Individual */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div class="back-to">
		
			<a href="/about/team/"><span>&larr;</span> Back to <strong>The Team</strong></a>
		
		</div>

		<div class="hero">
		
			<?php if ( get_field('staff_hero') ) { ?>
			
				<img src="<?php the_field('staff_hero'); ?>" alt="<?php the_title(); ?>" />

			<?php } else { ?>

				<img src="/wp-content/themes/milesdesign/-/media/example-fallback-photo.jpg" alt="A new photo of <?php the_title(); ?> is coming soon." />
			
			<?php } ?>
		
		</div>

		<div class="content">

			<h1 class="name"><?php the_title(); ?></h1>

			<h2 class="position"><?php print_custom_field('position'); ?></h2>

			<?php the_content(); ?>

		</div>

		<div class="connect">

			<div class="name"><?php the_title(); ?></div>

			<div class="position"><?php print_custom_field('position'); ?></div>
		
			<?php
			
				$title = get_the_title();
				$title_array = explode(' ', $title);
				$first_name = $title_array[0];

			?>

			<h3 class="connect-with">Connect with <?php echo $first_name ?></h3>

			<?php if (
			
				get_field('twitter') ||
				get_field('linkedin') ||
				get_field('facebook') ||
				get_field('google') ||
				get_field('amazon') ||
				get_field('dribbble') ||
				get_field('instagram')
		
			) { ?>

				<ul>
				
					<?php if ( get_field('twitter') ) { ?>
					
						<li class="twitter"><a href="<?php the_field('twitter'); ?>">Twitter</a></li>
					
					<?php } ?>

					<?php if ( get_field('linkedin') ) { ?>
					
						<li class="linkedin"><a href="<?php the_field('linkedin'); ?>">LinkedIn</a></li>
					
					<?php } ?>

					<?php if ( get_field('facebook') ) { ?>
					
						<li class="facebook"><a href="<?php the_field('facebook'); ?>">Facebook</a></li>
					
					<?php } ?>

					<?php if ( get_field('google') ) { ?>
					
						<li class="google"><a href="<?php the_field('google'); ?>">Google Plus</a></li>
					
					<?php } ?>

					<?php if ( get_field('amazon') ) { ?>
					
						<li class="amazon"><a href="<?php the_field('amazon'); ?>">Amazon</a></li>
					
					<?php } ?>

					<?php if ( get_field('dribbble') ) { ?>

						<li class="dribbble"><a href="<?php the_field('dribbble'); ?>">Dribbble</a></li>
					
					<?php } ?>

					<?php if ( get_field('staff_instagram') ) { ?>

						<li class="instagram"><a href="<?php the_field('staff_instagram'); ?>">Instagram</a></li>
					
					<?php } ?>

				</ul>

			<?php } ?>
		
		</div>

	</div>

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
			
				$temp_staff = get_post($next_post->ID);
				$temp_class_name = ' ' .sanitize_title_with_dashes($temp_staff->post_title);

				$next_title = strip_tags(str_replace('"', '', $next_post->post_title));

				echo '<div class="next' . $temp_class_name . '">';

					echo '<a href="' . get_permalink($next_post->ID) . '" rel="next"><strong class="name">'. $next_title . '</strong> <span class="arrow">&raquo;</span></a>';

				echo '</div>';

			}

		?>

	</div>

<?php get_footer(); ?>
