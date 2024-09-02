<?php

/* Template Name: Home */

?>

<?php get_header(); ?>

	<div id="main" role="main">

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<div class="group">

			<?php dynamic_sidebar( 'homepage-widgets' ); ?>

		</div>

	</div>

	<div id="secondary">
	
		<div class="recent-articles">

			<?php 

				$args = array( 'numberposts' => 4, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
				$postslist = get_posts( $args );

				foreach ($postslist as $post) : setup_postdata($post); ?>

				<article>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<footer>
					
						<time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('jS F Y') ?></time>
					
					</footer>

				</article>

			<?php endforeach; ?>

		</div>

	</div>

<?php get_footer(); ?>