<?php

/* Template Name: Contact */

?>

<?php get_header(); ?>

	<div id="main" role="main">

		<div id="map">
	
			<div id="map-wrap">
	
				<!-- Map -->
			
			</div>

		</div>

		<div>
		
			<?php the_content(); ?>
		
		</div>

		<?php gravity_form(1, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=true, $tabindex=1); ?>

	</div>

	<div id="secondary">
	
		<div class="vcard">

			<div class="fn n org">Miles Design</div>

			<div class="adr">

				<div class="street-address">

					<span class="street">55 Monument Circle</span>,
					<span class="suite">Suite 1300</span>

				</div>

				<span class="locality">Indianapolis</span>,
				<span class="region">IN</span>,
				<span class="postal-code">46204</span>

			</div>

			<div class="tel">(317) 915-8693</div>

			<div class="tel">(877) 906-4537</div>

			<a class="email" href="mailto:info@milesdesign.com">info@milesdesign.com</a>

		</div>
	
	</div>

<?php get_footer(); ?>