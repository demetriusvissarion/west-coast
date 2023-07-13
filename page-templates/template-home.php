<?php

/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
	get_template_part('global-templates/hero');
}

$wrapper_id = 'full-width-page-wrapper';
if (is_page_template('page-templates/no-title.php')) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">

			<div class="col-lg-8 col-xl-7">
				<div class="skip-bin-info-holder">
					<div class="overlay-image-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.svg" alt="Arrow Up West Coast" />
					</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i> Skip Bin instant quote
					</div>
					<div class="desc">Simply type your suburb above and you will be provided with an instant price across our range</div>
				</div>
			</div>

			<div class="col-lg-4 offset-xl-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.svg" alt="West Coast Info" width="100%" />
				<div class="seven-day-skip-info">
					7-Day skip bin hire direct to your home covering Perth to Albany
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
