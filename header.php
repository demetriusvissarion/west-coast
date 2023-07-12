<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// $bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
// $navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
// $container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Cache-control" content="no-cache">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

			<div class="top-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" />
							</a>
						</div>
						<div class="col-lg-7">
							<div class="top-header-contact">
								<a href="tel:1800927831"><i class="fa fa-phone"></i>1800 927 831</a>
								<a href="mailto:info@westcoastwaste.com.au"><i class="fa fa-envelope-o"></i>info@westcoastwaste.com.au</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<nav id="main-nav" class="navbar navbar-expand-lg " aria-labelledby="main-nav-label">

				<div class="container">

					<div class="search-input-holder">
						<div class="title">Quote: </div>
						<input type="text" placeholder="Type your suburb here" />
					</div>

					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
			</nav>
		</div><!-- #wrapper-navbar -->