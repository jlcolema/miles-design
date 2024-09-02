<?php

/* Template Name: Individual */

?>

<?php get_header(); ?>

	<div class="nav-return">

		<div class="prev"><a href="/about/team"><span class="arrow">&larr;</span> <span class="back-to">Back to <strong>The Team</strong></span></a></div>

	</div>

	<section class="individual">

		<div class="row">

			<div>

				<div class="contact-info">

					<h2 class="name">Jane Appleseed</h2>

					<h3 class="position">Principal</h3>

					<h4 class="connect-with">Connect with Jane</h4>

					<ul class="connect">
						<li class="twitter"><a href="http://www.twitter.com/milesdesign" rel="external">Twitter</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/companies/miles-design" rel="external">LinkedIn</a></li>
						<li class="facebook"><a href="http://www.facebook.com/brandstrategy" rel="external">Facebook</a></li>
						<li class="google"><a href="https://plus.google.com/108165463240577780228" rel="external">Google+</a></li>
						<li class="amazon"><a href="#">Amazon Author Page</a></li>
					</ul>

				</div>

			</div>

			<div>

				<div class="bio">

					<div class="photo">

						<img src="<?php bloginfo('template_directory'); ?>/-/media/example-photo.jpg" alt="Photo" class="identity" />

					</div>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed augue id lacus molestie consequat vitae a orci. Cras pulvinar vulputate odio, nec ultrices ipsum mattis pretium. Praesent tristique mauris sit amet nulla eleifend sodales. Praesent ac enim aliquam justo viverra semper. Proin aliquet egestas lectus, eget luctus nibh sagittis nec. Duis imperdiet quam aliquam eros fringilla pellentesque. Curabitur sit amet turpis eget turpis accumsan eleifend. Nulla facilisi. Nullam ut augue nec justo iaculis laoreet.</p>
					
					<p>Ut dictum accumsan neque et volutpat. Ut purus nunc, tincidunt vulputate eleifend ultrices, eleifend at diam. Morbi nisi elit, adipiscing ut gravida at, feugiat vel mi. Aliquam nisl nisl, vehicula sit amet sagittis ut, mollis rutrum sem. Integer urna purus, fringilla et blandit sed, viverra vitae enim. Nulla tempor molestie rhoncus. Donec vitae lacus magna, ac fermentum nisl. Morbi et elementum augue. Donec facilisis nisi eu mauris commodo sit amet posuere quam rhoncus. Aliquam sit amet neque vitae orci convallis mollis. Donec nec dignissim sem. Integer scelerisque purus et nisi euismod non egestas felis rhoncus. Proin vel ligula erat, quis tincidunt sapien. Aliquam erat volutpat. Suspendisse potenti. Fusce scelerisque scelerisque diam quis viverra.</p>
					
					<p>Duis semper varius sapien, hendrerit aliquet augue tempus vel. Curabitur adipiscing bibendum nibh, vestibulum posuere neque lacinia eu. Duis egestas tortor ac justo euismod sit amet cursus arcu pellentesque. Sed vitae dolor eu magna posuere suscipit. Nullam ullamcorper, diam ac commodo placerat, augue nulla viverra libero, in aliquet odio justo a ligula. In consectetur lorem lorem. Curabitur metus velit, mollis vitae rhoncus id, consequat eu sem.</p>

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
