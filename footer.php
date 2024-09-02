		</div>

	</div>

	<?php if (is_front_page()) { ?>

	<?php include (TEMPLATEPATH . '/a/inc/carousel.php' ); ?>

	<?php include (TEMPLATEPATH . '/a/inc/featured.php' ); ?>

	<?php } ?>

	</div>

</div>

<!-- Footer -->

<footer id="footer" role="contentinfo">

	<div class="wrap">

		<div class="inner-wrap">

			<div class="testimonial">
			
				<h4>
				
					<a href="/about/testimonials/">Client Testimonials</a>

					<span class="toggle">&darr;</span>

				</h4>

				<div class="container">

					<?php
					
						$posts = get_posts(array(
		
							'numberposts' => 1,
							'post_type' => 'testimonials',
							'orderby' => 'rand'
							
						));
		
						if($posts) {
		
							foreach($posts as $post) {
	
								$testimonial_name = get_field('testimonial_name');
								$job_title = get_field('job_title');
								$company_name = get_field('company_name');
								$client_relationship = get_field('client_relationship');
		
								echo '<blockquote>';
	
									echo '<p>' . $post->post_content . '</p>';
	
									echo '<cite>' . $testimonial_name . ', ' . $company_name . '</cite>';
	
								echo '</blockquote>';
		
							}
		
						}
		
					?>

				</div>

			</div>

			<div class="contact">
			
				<h4>
				
					<a href="/contact/">Contact Us</a>

					<span class="toggle">&darr;</span>

				</h4>

				<div class="container">

					<div class="vcard">
	
						<div class="fn n org"><?php the_field("company_name", "option"); ?></div>
	
						<div class="adr">
	
							<div class="street-address">

								<span class="street"><?php the_field("address_line_1", "option"); ?></span>, 
								<span class="suite"><?php the_field("address_line_2", "option"); ?></span>
	
							</div>

							<span class="locality"><?php the_field("city", "option"); ?></span>, 
							<span class="region"><?php the_field("state", "option"); ?></span>, 
							<span class="postal-code"><?php the_field("zip", "option"); ?></span>
	
						</div>
	
						<div class="tel"><?php the_field("office_phone", "option"); ?></div>
	
						<div class="tel"><?php the_field("alternative_office_phone", "option"); ?></div>
	
						<a class="email" href="mailto:<?php the_field("email", "option"); ?>"><?php the_field("email", "option"); ?></a>

						<p id="copyright"><?php the_field("copyright", "option"); ?></p>

					</div>

				</div>

			</div>
			
			<div class="connect">
			
				<h4>
				
					<a href="/about/">Connect with Us</a>

					<span class="toggle">&darr;</span>

				</h4>

				<div class="container">

					<ul>
					
						<li class="twitter">
						
							<a href="<?php the_field("twitter", "option"); ?>" rel="external">Twitter</a>
	
						</li>
	
						<li class="linkedin">
						
							<a href="<?php the_field("linked_in", "option"); ?>" rel="external">LinkedIn</a>
	
						</li>
	
						<li class="facebook">
						
							<a href="<?php the_field("facebook", "option"); ?>" rel="external">Facebook</a>

						</li>
	
						<li class="google">
						
							<a href="<?php the_field("google+", "option"); ?>" rel="external">Google+</a>

						</li>

						<li class="blog">
						
							<a href="/blog/">Blog</a>

						</li>
			
					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>

</div>

	<div id="screen-size">

		<div>Developer M&ouml;de</div>

		<!-- For development use only. Remove once live. -->

		<p></p>

	</div>

	<?php wp_footer(); ?>
	
	<?php

		// Fixed Sidebar
		
		if ( is_single() && stripos($_SERVER['REQUEST_URI'],'/work/') !== false) { ?>
			
			<script type='text/javascript' src='/wp-content/themes/milesdesign/a/js/fixed.js'></script>
			<script type='text/javascript' src='/wp-content/themes/milesdesign/a/js/fixed-sidebar.js'></script>
			
	<?php } ?>

</body>

</html>