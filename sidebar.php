<div id="secondary">

	<?php if ( is_category() ) { ?>

		<h1 class="page-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

	<?php } elseif ( is_tag() ) { ?>

		<h1 class="page-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

	<?php } elseif ( is_day() ) { ?>

		<h1 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h1>

	<?php } elseif ( is_month() ) { ?>

		<h1 class="page-title">Archive for <?php the_time('F, Y'); ?></h1>

	<?php } elseif ( is_year() ) { ?>

		<h1 class="page-title">Archive for <?php the_time('Y'); ?></h1>

	<?php } elseif ( is_author() ) { ?>
				
		<h1 class="page-title">Author Archive</h1>
					
	<?php } elseif ( isset($_GET['paged']) && ! empty($_GET['paged'])) { ?>

		<h1 class="page-title">Blog Archives</h1>

	<?php } else { ?>

	<?php } ?>

	<div class="widget widget_search">

		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

			<div>

				<label class="screen-reader-text" for="s">Search for:</label>

				<input type="text" value="" name="s" id="s" placeholder="Search the Blog" />

				<input type="submit" id="searchsubmit" value="Search" />

			</div>

		</form>

	</div>

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

	<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

	<div class="widget">

		<h2>Categories</h2>
	
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>

	</div>

	<?php endif; ?>

</div>