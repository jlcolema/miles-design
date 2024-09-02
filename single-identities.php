<?php

/* Template Name: Identities */

?>

<?php get_header(); ?>

	<div class="nav-return">

		<div class="prev"><a href="/work"><span class="arrow">&larr;</span> <span class="back-to">Back to <strong>Work</strong></span></a></div>

	</div>

	<section class="project">

		<div class="row">

			<div class="project-brief">

				<div class="overview">

					<h2><?php the_title(); ?></h2>

					<h3 class="category">Identity</h3>

					<div>
						<?php the_content(); ?>
					</div>

				</div>

			</div>

			<div class="">

				<div class="samples">

					<ul>
						<li><img src="/wp-content/themes/milesdesign/-/media/example-photo.jpg" alt="Photo" class="identity" /></li>
						<li><img src="/wp-content/themes/milesdesign/-/media/example-photo.jpg" alt="Photo" class="print" /></li>
						<li><img src="/wp-content/themes/milesdesign/-/media/example-photo.jpg" alt="Photo" class="web" /></li>
					</ul>

				</div>

			</div>

		</div>

	</section>

	<div class="nav-browse">

		<!-- <?php next_post_link('%link', 'Next post in category', TRUE); ?> -->

		<div class="prev">

			<?php previous_post_link('<span>%link</span>'); ?>

		</div>

		<div class="next">

			<?php next_post_link('<span>%link</span>'); ?>

		</div>

	</div>

<?php get_footer(); ?>