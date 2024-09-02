<?php wp_reset_query(); ?>
	
<!doctype html>

<html class="no-js">

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<![endif]-->

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="author" content="Miles Design">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<meta name="google-site-verification" content="">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/-/media/favicon.png">

	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/-/media/apple-touch-icon.png">

	<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/print.css" rel="stylesheet" media="print" />

	<link rel="stylesheet" href="//f.fontdeck.com/s/css/PkZUvciZZJz73O0RDhiyq9tHPBI/milesdesign.tunedev.com/31297.css" type="text/css" />

	<!--[if IE 10]>

		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/ie/ie10.css" rel="stylesheet" media="screen, projection" />

	<![endif]-->

	<!--[if IE 9]>

		<link type="text/css" href="/a/css/ie/ie9.css" rel="stylesheet" media="screen, projection" />

	<![endif]-->

	<!--[if IE 8]>

		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/ie/ie8.css" rel="stylesheet" media="screen, projection" />

	<![endif]-->

	<!--[if IE 7]>

		<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/ie/ie7.css" rel="stylesheet" media="screen, projection" />

	<![endif]-->

	<script type="text/javascript">
	
		<!--
		
			document.write('<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/enhanced.css" rel="stylesheet" media="screen, projection" />');

		//-->
	
	</script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/modernizr.js"></script>

	<!--[if lt IE 9]>

		<script src="<?php bloginfo('template_directory'); ?>/a/js/selectivizr.js"></script>

	<![endif]-->

	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="">

	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />

	<link type="application/rss+xml" href="/blog/feed/" rel="alternate" title="RSS" />

	<!-- Google Maps -->

	<?php if (stripos($_SERVER['REQUEST_URI'],'/contact/') !== false) { ?>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.2.1"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/-/js/map.js"></script>
	<? } ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_id(); ?> <?php body_class("loading"); ?><?php if (stripos($_SERVER['REQUEST_URI'],'/contact/') !== false) { ?> onload="initialize()"<?php } ?>>

<div id="wrapper">

	<div id="page">

	<p class="move">
	
		<a href="#main">Skip to main content.</a>
	
	</p>

	<header id="header" role="banner">

		<div class="wrap">

			<div id="logo">
		
				<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>

			</div>

			<nav id="nav" role="navigation">

				<?php $defaults = array(

					'theme_location'  => 'primary',
					'menu'            => '', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul role="navigation" class="menu">%3$s</ul>',
					'depth'           => 1,
					'walker'          => ''
	
				); ?>

				<?php wp_nav_menu( $defaults ); ?>

			</nav>

			<div id="utilities">
	
				<div class="toggle">Call or visit us!</div>
	
				<ul>
				
					<li class="phone">
					
						<a href="tel:1-317-915-8693">(317) 915-8693</a>
						
					</li>

					<li class="directions">
					
						<a href="http://maps.apple.com/?lsp=9902&sll=39.767986,-86.158640&q=55%20Monument%20Cir,%20Unit%201300,%20Indianapolis,%20IN%20%2046204,%20United%20States" rel="external">Directions</a>
						
					</li>
					
				</ul>
	
			</div>

		</div>

	</header>

	<?php include (TEMPLATEPATH . '/a/inc/secondary-nav.php' ); ?>

	<div class="content-wrap">

	<div id="content">

		<div class="wrap">