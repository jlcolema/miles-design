<?php

/* Template Name: Space */

?>

<?php get_header(); ?>

	<div id="main" role="main">
	
		<div class="overview">
		
			<div>
			
				<?php the_content(); ?>
			
			</div>
		
		</div>

		<?php if(get_field('space_images')): ?>
		 
			<div class="samples">
		 
			<?php while(has_sub_field('space_images')): ?>
		 
				<div class="sample">

					<img src="<?php the_sub_field('space_image'); ?>" alt="<?php the_sub_field('space_description'); ?>" />
					
				</div>
		 
			<?php endwhile; ?>
		 
			</div>
		 
		<?php endif; ?>

	</div>

<?php get_footer(); ?>