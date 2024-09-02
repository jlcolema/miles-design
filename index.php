<?php get_header(); ?>

	<div id="main" role="main">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article>
	
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

				<div class="featured">

					<a href="<?php the_permalink() ?>">

					<?php 

						$img_id = get_post_thumbnail_id($post->ID);

						$image = wp_get_attachment_image_src( $img_id, 'full' );
						$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

						if ($image) :

					?>

					<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt ?>" />

					<?php endif; ?>

					</a>

				</div>

				<p>

					<?php the_excerpt(); ?>

				</p>

				<div class="more">
				
					<a href="<?php the_permalink() ?>">Continue reading this post</a>
					
				</div>

				<footer>

					<p class="author">by <?php the_author() ?></p>

					<time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('j-M-Y') ?></time>

				</footer>
	
			</article>
	
		<?php endwhile; ?>
	
		<?php include (TEMPLATEPATH . '/-/inc/nav.php' ); ?>
	
		<?php else : ?>
	
			<h2>Not Found</h2>
	
		<?php endif; ?>
	
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
