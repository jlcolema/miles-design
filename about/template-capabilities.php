<?php

/* Template Name: Capabilities */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div>
		
			<?php the_content(); ?>
		
		</div>
	
	</div>

	<div id="secondary">
	
		<div class="">

			<?php dynamic_sidebar( 'capabilities-widgets' ); ?>

		</div>
	
	</div>

<?php get_footer(); ?>