<?php

	if(!$post->post_parent){

		// will display the subpages of this top level page

		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"."&depth=1");

	} else {

		if($post->ancestors) {
	
			// now you can get the the top ID of this page
	
			// wp is putting the ids DESC, thats why the top level ID is the last one
	
			$ancestors = end($post->ancestors);
	
			$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0"."&depth=1");

		}

	}

if ($children) { ?>

	<div id="secondary-nav">

		<div class="wrap">

			<div class="toggle">Subnav</div>

			<ul>

				<?php echo $children; ?>

			</ul>

		</div>

	</div>

<?php } ?>