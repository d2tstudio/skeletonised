<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  	<!-- Modernizr
  	================================================== -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script> 

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="Header">
		<div id="Top">
			<div class="container">
				<div id="Utility" class="four columns alpha omega offset-by-one">
					<?php dynamic_sidebar( 'utility' ); ?>
				</div>

				<div class="eleven columns alpha omega">
					<?php wp_nav_menu(array('theme_location' => 'top', 'container_class'=>'menu', 'container'=>'nav','container_id'=>'TopNav', 'menu_class' => 'sf-menu', 'fallback_cb' => 'none')); ?> 
				</div>
			</div>
		</div>

		<div id="Branding" class="container">
		<?php if(get_theme_mod('logo')) : ?>
			<div id="Logo">	
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_theme_mod('logo'); ?>">
				</a>
			</div>
		<?php else: ?>
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h5 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>			
		<?php endif ?>
		</div>
		
		<div id="Navigation" class="container">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=>'nav', 'container_class'=>'row', 'container_id'=>'PrimaryNav', 'menu_class' => 'sf-menu',  'fallback_cb' => 'none')); ?> 
		</div>
	</header>

		<div id="main" class="container">
