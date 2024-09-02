<?php

/* Template Name: About */

?>

<?php get_header(); ?>

	<div id="main" role="main">

		<?php if (has_post_thumbnail()) { ?>

		<div class="hero">

			<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full, false, ''); echo $src[0]; ?>" />
		
		</div>

		<?php } ?>

		<div>
		
			<?php the_content(); ?>
		
		</div>

	</div>

	<div id="secondary">

		<div class="">
		
			<div class="connect">
			
				<h4>Connect with Us</h4>
				
				<ul>
				
					<li class="twitter"><a href="<?php echo tune_options('txt_twitter'); ?>" rel="external">Twitter</a></li>
					<li class="linkedin"><a href="<?php echo tune_options('txt_linked_in'); ?>" rel="external">LinkedIn</a></li>
					<li class="facebook"><a href="<?php echo tune_options('txt_facebook'); ?>" rel="external">Facebook</a></li>
					<li class="google"><a href="<?php echo tune_options('txt_google_plus'); ?>" rel="external">Google+</a></li>
					<li class="amazon"><a href="http://www.amazon.com/author/joshmiles">Amazon Author Page</a></li>
				
				</ul>
			
			</div>
		
		</div>

	</div>

<?php get_footer(); ?>