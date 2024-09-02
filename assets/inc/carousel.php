<div id="carousel">

	<div class="wrap">

		<div class="inner-wrap">

			<div class="photos">
	
				<div class="cycle-slideshow" 
			
					data-cycle-fx="scrollHorz"
					data-cycle-timeout="5000"
					data-cycle-slides="> div"
					data-cycle-prev=".prev"
					data-cycle-next=".next"
			
				>
	
					<?php
					
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'slides',
							'orderby' => 'menu_order',
							'order' => 'ASC'
						);
						
						$items = query_posts( $args );
		
					?>
				
					<?php  foreach($items as $item):
													
						// get attachment info
	
						$image_id = get_post_thumbnail_id($item->ID);
						$image_url = wp_get_attachment_url( $image_id );

						$attachment = get_post($image_id);
						$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

					?>
	
					<div class="photo">

						<div data-picture data-alt="<?php echo $alt; ?>">

							<!-- Start with 741 x 370 -->

							<div data-src="<?php echo $image_url; ?>"></div>

							<!-- Move up to 1000 x 500 -->

							<div data-src="<?php echo $image_url; ?>" data-media="(min-width: 821px)"></div>

							<!-- Move back to 741 x 370 -->

							<div data-src="<?php echo $image_url; ?>" data-media="(min-width: 1081px)"></div>
						
							<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
	
							<noscript>
							
								<img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>">
							
							</noscript>

						</div>

					</div>
					
					<?php endforeach; ?>
			
				</div>
	
				<div class="carousel-pager">
				
					<div class="prev">Prev</div>
					
					<div class="next">Next</div>
				
				</div>
	
			</div>
	
			<div class="details-wrap">
		
				<div class="cycle-slideshow" 
			
					data-cycle-fx="scrollVert" 
					data-cycle-timeout="5000"
					data-cycle-slides="> div"
					data-cycle-prev=".prev"
					data-cycle-next=".next"
					data-cycle-auto-height="container"
					data-cycle-reverse="true"
			
				>
	
					<?php
					
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'slides',
							'orderby' => 'menu_order',
							'order' => 'ASC'
						);
						
						$items = query_posts( $args );
		
					?>
				
					<?php  foreach($items as $item):
													
						// get attachment info
	
						$image_id = get_post_thumbnail_id($item->ID);
						$image_url = wp_get_attachment_url( $image_id );
						$attachment = get_post($image_id);
						$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						
					?>
	
					<div class="details">
					
						<h2><?php echo $item->post_title; ?></h2>
				
						<div>
						
							<?php echo wpautop($item->post_content); ?>
							
						</div>
					
					</div>
					
					<?php endforeach; ?>
			
				</div>
	
			</div>
	
		</div>
	
	</div>
	
</div>