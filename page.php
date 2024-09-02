<?php get_header(); ?>

	<div id="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</article>
		
		<?php endwhile; endif; ?>

	</div>

<?php get_footer(); ?>
