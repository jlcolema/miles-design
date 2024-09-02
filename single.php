<?php get_header(); ?>

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article>

			<h1><?php the_title(); ?></h1>

			<footer>

				<p class="author">by <?php the_author() ?></p>

				<time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('j-M-Y') ?></time>

			</footer>

			<div class="share-icons">

				<ul>
					<?php /* <li class="comments">
						
						<div class="box">
						
							<a href="#" class="count"><?php disqus_count('milesdesign'); ?></a>
							
							<a href="#" class="share"></a>
						
						</div>
						
					</li> */ ?>
					<li class="twitter" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Tweet"></li>
					<li class="linkedin" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Share"></li>
					<li class="facebook" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Like"></li>
					<li class="googleplus" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="+1"></li>
					<li class="pinterest" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Pint It"></li>
				</ul>

			</div>

			<div>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>

			<div class="share">

				<ul>
					<?php /* <li class="comments">
						
						<div class="box">
						
							<a href="#" class="count"><?php disqus_count('milesdesign'); ?></a>
							
							<a href="#" class="share"></a>
						
						</div>

					</li> */ ?>
					<li class="twitter" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Tweet"></li>
					<li class="linkedin" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Share"></li>
					<li class="facebook" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Like"></li>
					<li class="googleplus" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="+1"></li>
					<li class="pinterest" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-title="Pint It"></li>
				</ul>

			</div>

			<?php include (TEMPLATEPATH . '/-/inc/meta.php' ); ?>

		</article>

		<div class="nav-browse">
	
			<?php
	
				$prev_post = get_previous_post();
	
				if ($prev_post) {
				
					$temp_staff = get_post($prev_post->ID);
	
					$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
	
					echo '<div class="prev">';
	
						echo '<a href="' . get_permalink($prev_post->ID) . '" rel="prev"><span class="arrow">&laquo;</span> <strong class="name">Previous</strong></a>';
	
					echo '</div>';
	
				}
	
				$next_post = get_next_post();
	
				if ($next_post) {
				
					$temp_staff = get_post($prev_post->ID);
	
					$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
	
					echo '<div class="next">';
	
						echo '<a href="' . get_permalink($next_post->ID) . '" rel="next"><strong class="name">Next</strong> <span class="arrow">&raquo;</span></a>';
	
					echo '</div>';
	
				}
	
			?>
	
		</div>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>