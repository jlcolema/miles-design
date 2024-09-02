<?php

	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'md', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";

	if ( is_readable($locale_file) )
	require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Enqueue scripts and styles
	if ( !function_exists('core_mods') ) {

		function core_mods() {

			if ( !is_admin() ) {

				// jQuery

				wp_deregister_script('jquery');
				wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js", false);

				wp_enqueue_script('jquery');

				// Cycle

				wp_register_script('cycle-js', get_template_directory_uri() . "/a/js/cycle.js", array('jquery'), '', true);

				wp_enqueue_script('cycle-js');

				// Vertical Scroll Plugin

				wp_register_script('vertical-scroll-js', get_template_directory_uri() . "/a/js/vertical-scroll.js", array('jquery'), '', true);

				wp_enqueue_script('vertical-scroll-js');

				// Waypoints

				wp_register_script('waypoints-js', get_template_directory_uri() . "/a/js/waypoints.js", array('jquery'), '', true);

				wp_enqueue_script('waypoints-js');

				// Sharrre
		
				wp_register_script('share-js', get_template_directory_uri() . "/a/js/share.js", array('jquery'), '', true);

				wp_enqueue_script('share-js');

				// Functions
				
				wp_register_script('functions-js', get_template_directory_uri() . "/a/js/functions.js", array('jquery'), '', true);

				wp_enqueue_script('functions-js');

			}

		}

		core_mods();

	}
	
	// Clean up the <head>
	function removeHeadLinks() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
	}
	add_action('init', 'removeHeadLinks');
	remove_action('wp_head', 'wp_generator');

	// Advanced Custom Fields Add-On(s)
	if (function_exists('register_field')) { 

		register_field('Tax_field', dirname(__File__) . '/acf-tax.php');

	}

	add_theme_support( 'post-thumbnails' );

	// Nav Menu
	register_nav_menu( 'primary', __( 'Primary Menu', 'md' ) );

	// Widgets
	if (function_exists('register_sidebar')) {

		register_sidebar(array(
			'name' => __('Sidebar Widgets','md' ),
			'id'   => 'sidebar-widgets',
			'description'   => __( 'These are widgets for the sidebar.','md' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2><div class="container">'
		));

		register_sidebar(array(
			'name' => __('Homepage Widgets','md' ),
			'id'   => 'homepage-widgets',
			'description'   => __( 'These are widgets for the homepage.','md' ),
			'before_widget' => '<div id="%1$s" class="cta"><div class="inner-wrap">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="title">',
			'after_title'   => '</h5>'
		));

		register_sidebar(array(
			'name' => __('Capabilities Widgets','md' ),
			'id'   => 'capabilities-widgets',
			'description'   => __( 'These are widgets for the capabilities page.','md' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		));

		register_sidebar(array(
			'name' => __('Footer Widgets','md' ),
			'id'   => 'footer-widgets',
			'description'   => __( 'These are widgets for the footer.','md' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));

	}

	// Disqus Comment Count
	function disqus_count($disqus_shortname) {

		wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
		echo '<a href="'. get_permalink() .'#disqus_thread"></a>';

	}

	// Add is_blog()
	function is_blog () {
	
		global  $post;
		$posttype = get_post_type($post );
		return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
		
	}


	/*-------------------------------------------
	   	Add Page ID to <body>
	-------------------------------------------*/

	// An example would be for the home page: <body id="home" class="...">


	function get_body_id( $id = '' ) {

		global $wp_query;

		// Fallbacks

		if ( is_front_page() )  $id = 'home';
		if ( is_home() )        $id = 'blog';
		if ( is_search() )      $id = 'search';
		if ( is_404() )         $id = 'error';

		// If it's an Archive Page

		if ( is_archive() ) {

			if ( is_author() ) {

				$author = $wp_query->get_queried_object();
				$id = 'archive-author-' . sanitize_html_class( $author->user_nicename , $author->ID );

			} elseif ( is_category() ) {

				$cat = $wp_query->get_queried_object();
				$id = 'archive-category-' . sanitize_html_class( $cat->slug, $cat->cat_ID );

			} elseif ( is_date() ) {

				if ( is_day() ) {

					$date = get_the_time('F jS Y');
					$id = 'archive-day-' . str_replace(' ', '-', strtolower($date) );

				} elseif ( is_month() ) {

					$date = get_the_time('F Y');
					$id = 'date-' . str_replace(' ', '-', strtolower($date) );   

				} elseif ( is_year() ) {

					$date = get_the_time('Y');
					$id = 'date-' . strtolower($date);

				} else {

					$id = 'archive-date';

				}

			} elseif ( is_tag() ) {

				$tags = $wp_query->get_queried_object();
				$id = 'archive-tag-' . sanitize_html_class( $tags->slug, $tags->term_id );

			} else {

				$id = 'archive';

			}

		}

		// If it's a Single Post

		if ( is_single() ) {

			if ( is_attachment() ) {

				$id = 'attachment-'.$wp_query->queried_object->post_name;

			} else {

				$id = 'single-'.$wp_query->queried_object->post_name;

			}

		}

		// If it's a Page

		if ( is_page() ) {

			$id = $wp_query->queried_object->post_name;

			if ('' == $id ) {

				$id = 'page';

			}

		}

		// If $id still doesn't have a value, attempt to assign it the Page's name

		if ('' == $id ) {

			$id = $wp_query->queried_object->post_name;

		}

		$id = preg_replace("#\s+#", " ", $id);
		$id = str_replace(' ', '-', strtolower($id) );

		// Let other plugins modify the function

		return apply_filters( 'body_id', $id );    

	};

	// Print id on body elements

	function body_id( $id = '' ) {

		if ( '' == $id ) {

			$id = get_body_id();

		}

		$id = preg_replace("#\s+#", " ", $id);
		$id = str_replace(' ', '-', strtolower($id) );

		echo ( '' != $id ) ? 'id="'.$id. '"': '' ;

	};


	/*-------------------------------------------
		Set up Multiple post thumbnails 
		for specific pages
	-------------------------------------------*/
	if (class_exists('MultiPostThumbnails')) {

		// Work
		
		/* new MultiPostThumbnails(array(
			'label' => 'Grayscale Logo (349x190)',
			'id' => 'grayscale_logo',
			'post_type' => 'work'
		) );
		
		new MultiPostThumbnails(array(
			'label' => 'Color Mouseover (349x190) (Name must end in -hover)',
			'id' => 'color_mouseover',
			'post_type' => 'work'
		) ); */

		// CTAs

		new MultiPostThumbnails(array(
			'label' => 'Featured Image',
			'id' => 'cta_featured_image',
			'post_type' => 'ctas'
		) );
		
		new MultiPostThumbnails(array(
			'label' => 'Mouseover Image (Name must end in -hover)',
			'id' => 'cta_featured_mouseover',
			'post_type' => 'ctas'
		) );

		// Team

		/* new MultiPostThumbnails(array(

			'label' => 'Profile Photo (741 &times; 380)',
			'id' => 'profile_image',
			'post_type' => 'staff'

		) );
		
		new MultiPostThumbnails(array(

			'label' => 'Thumbnail (349 &times; 190)',
			'id' => 'thumbnail_image',
			'post_type' => 'staff'

		) ); */

	}
	
	/*-------------------------------------------
		make sure the WordPress SEO 
		meta box shows up at the
		bottom of the admin screen
	-------------------------------------------*/
	add_filter( 'wpseo_metabox_prio', function() { return 'low';});
	

	/*-------------------------------------------
		add extra profile
		information for authors
	-------------------------------------------*/
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
	function my_show_extra_profile_fields( $user ) { ?>
	
	<h3>Extra profile information</h3>
	
	<table class="form-table">

		<tr>

			<th><label for="position">Title</label></th>
			
			<td>
				<input type="text" name="position" id="position" value="<?php echo esc_attr( get_the_author_meta( 'position', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">This is your title within the company.</span>
			</td>

		</tr>

		<tr>

			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Ex: http://www.twitter.com/milesdesign</span>
			</td>

		</tr>

		<tr>

			<th><label for="linkedin">LinkedIn</label></th>

			<td>
				<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

		<tr>

			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

		<tr>

			<th><label for="google">Google +</label></th>

			<td>
				<input type="text" name="google" id="google" value="<?php echo esc_attr( get_the_author_meta( 'google', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

		<tr>

			<th><label for="amazon">Amazon Author Page</label></th>

			<td>
				<input type="text" name="amazon" id="amazon" value="<?php echo esc_attr( get_the_author_meta( 'amazon', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

		<tr>

			<th><label for="amazon">Dribbble</label></th>

			<td>
				<input type="text" name="dribbble" id="dribbble" value="<?php echo esc_attr( get_the_author_meta( 'dribbble', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

		<tr>

			<th><label for="amazon">Instagram</label></th>

			<td>
				<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" />
			</td>

		</tr>

	</table>

	<?php }

	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
	
	function my_save_extra_profile_fields( $user_id ) {

		if ( !current_user_can( 'edit_user', $user_id ) )

			return false;

		update_user_meta( $user_id, 'position', $_POST['position'] );
		update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
		update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
		update_user_meta( $user_id, 'google', $_POST['google'] );
		update_user_meta( $user_id, 'amazon', $_POST['amazon'] );
		update_user_meta( $user_id, 'dribbble', $_POST['dribbble'] );
		update_user_meta( $user_id, 'instagram', $_POST['instagram'] );

	}