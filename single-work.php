<?php

/* Template Name: Project */

?>

<?php get_header(); ?>

	<div id="main" role="main">

		<div class="back-to">
		
			<a href="/work/"><span>&larr;</span> Back to <strong>Work</strong></a>

		</div>

		<div class="overview">

			<div class="overview-overview">

				<div class="overview-inner">
			
					<h1><?php the_title(); ?></h1>
		
					<h3 class="category">&nbsp;</h3>
		
					<div>
					
						<?php the_content(); ?>
		
					</div>
	
				</div>

			</div>

		</div>

		<div id="samples">

			<?php

				if(get_field('images')) {

					while(has_sub_field('images')) {
						
						$image_url = wp_get_attachment_url(get_sub_field("image"), 'full');
					
						// get attachment info

						$attachment 	= get_post(get_sub_field("image"));
						$alt = get_post_meta(get_sub_field("image"), '_wp_attachment_image_alt', true);
						
						// if this is NOT the identities or websites section
						if ( ( stripos($_SERVER['REQUEST_URI'],'/work/identities/') !== false) || ( stripos($_SERVER['REQUEST_URI'],'/work/websites/') !== false) ) {
						
							$cat = get_sub_field("client_name");
							
						// if this IS the identities or websites section
						} else {

							// get category id
							$cat = get_sub_field("category");							
						}

						echo '<div class="sample" data-value="' . $cat . '">';
						
							if ( strlen(get_sub_field("url") ) ) {
								
								echo '<a href="' . get_sub_field("url") . '" rel="external">';
								
							}

							echo '<img src="' . $image_url . '" alt="' . $alt . '" />';

							echo '<div class="category">' . $cat . '</div>';
						
							if ( strlen(get_sub_field("url") ) ) {
								
								echo '</a>';
								
							}

						echo '</div>';
						
					}
					
				}

			?>

		</div>

	</div>

	<?php if (

		get_field('show_on_work_page')
		
	) { ?>

	<div class="nav-browse">
	
		<div class="prev">
		
			<?php 
			
				$prev_post = previous_post_link_plus( 
					array ( 
						'in_same_meta' 	=> 'show_on_work_page', 
						'post_type' 	=> ' "work" ', 
						'link' 			=> '<span class="arrow">&laquo;</span> <strong class="name">%title</strong>', 
						'echo' 			=> 'false',
						'format' 		=> '%link',
						'loop' 			=> true
					)
				);
				
				if ($prev_post) { 
					
					$prev_post;
					
				}
				
			?>
			
		</div>
	
		<div class="next">
		
			<?php 
			
				$next_post = next_post_link_plus( 
					array ( 
						'in_same_meta' 	=> 'show_on_work_page', 
						'post_type' 	=> ' "work" ', 
						'link' 			=> '<strong class="name">%title</strong> <span class="arrow">&raquo;</span>', 
						'echo' 			=> 'false',
						'format' 		=> '%link',
						'loop' 			=> true
					)
				);
				
				if ($next_post) { 
					
					$next_post;
					
				}
				
			?>
			
		</div>

		<?php
		
			/*

			$prev_post = get_previous_post();

			if ($prev_post) {

				$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));

				echo '<div class="prev">';

					echo '<a href="' . get_permalink($prev_post->ID) . '" rel="prev"><span class="arrow">&laquo;</span> <strong class="name">'. $prev_title . '</strong></a>';

				echo '</div>';

			}

			$next_post = get_next_post();

			if ($next_post) {

				$next_title = strip_tags(str_replace('"', '', $next_post->post_title));

				echo '<div class="next">';

					echo '<a href="' . get_permalink($next_post->ID) . '" rel="next"><strong class="name">'. $next_title . '</strong> <span class="arrow">&raquo;</span></a>';

				echo '</div>';

			}
			
			*/

		?>

	</div>

	<?php } ?>

	<div id="viewport" style="position: fixed; left: 0; top: 0;"></div>

<?php get_footer(); ?>