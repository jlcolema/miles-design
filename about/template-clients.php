<?php

/* Template Name: Clients */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div class="overview">
		
			<?php the_content(); ?>
		
		</div>

		<ul class="clients">
		
			<?php
			
				$args = array(
				  'posts_per_page' => -1,
				  'post_type' => 'work',
				  'orderby' => 'menu_order',
				  'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'show_on_clients_page',
							'value' => 'Yes',
							'compare' => 'LIKE'
						)
					)
				 );
				  
				$items = query_posts( $args );
			?>
				
			<?php 

				foreach($items as $item):

			 ?>
			
				<li><?php echo $item->post_title; ?></li>
			
			<?php endforeach; ?>
		
		</ul>
	
	</div>

<?php get_footer(); ?>
