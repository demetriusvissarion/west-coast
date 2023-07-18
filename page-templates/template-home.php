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
				<div class="seven-day-skip-info">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.svg" alt="West Coast Info" width="100%" />
					<div class="title">
						7-Day skip bin hire direct to your home covering Perth to Albany
					</div>
				</div>
			</div>
		</div>

		<div class="home-hero-slider">
			<div class="slider">
				<div class="slider-wrapper">
					<div class="slide">
						<div class="image"></div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.svg" alt="Truck">
							</div>
							<div class="info">We deliver the right skip bin for your residential and commercial projects.</div>
							<div class="slider-nav">
								<a href="#"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="#"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-product-info">

	<div class="home-special-offer-background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="discount-circle">
					<div class="abs-holder">
						<div class="save">Save</div>
						<div class="percent">20%</div>
					</div>
				</div>

				<div class="entry-content">
					<div class="title">15 Day Storm Special on Skip Bins</div>
					<div class="desc">BIN SERVICES - Perth, Fremantle, Kwinana, Rockingham, mandurah, Pinjarra, Waroona, Harvey, Australind, Bunbury, Busselton, Margaret River</div>
					<a href="#" class="button">Find out more information</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-products-holder">
		<div class="container">
			<h2><i class="fa fa-arrow-circle-down"></i>Select the right skip bin for your project</h2>
			<div class="home-products">
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.svg" alt="Product Placeholder" width="100%">
						</div>

						<div class="col-xl-4 col-md-6">
							<div class="title">4 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Ideal for narrow alleys or small streets</li>
								<li>Building Sites</li>
							</ul>
						</div>

						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">


								<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 4 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="Product Trailer">
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 16 wheelie bins</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="Product Bin">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/6m3-Skip-Bin.svg" alt="6m3 Skip Bin" width="100%">
						</div>

						<div class="col-xl-4 col-md-6">
							<div class="title">6 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Ideal for narrow alleys or small streets</li>
								<li>Building Sites</li>
							</ul>
						</div>

						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">


								<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 6 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="Product Trailer">
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 24 wheelie bins</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="Product Bin">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/9m3-Skip-Bin.svg" alt="Product Placeholder" width="100%">
						</div>

						<div class="col-xl-4 col-md-6">
							<div class="title">9 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Ideal for narrow alleys or small streets</li>
								<li>Building Sites</li>
							</ul>
						</div>

						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">


								<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 9 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="Product Trailer">
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 32 wheelie bins</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="Product Bin">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/15m3-Skip-Bin.svg" alt="Product Placeholder" width="100%">
						</div>

						<div class="col-xl-4 col-md-6">
							<div class="title">15 Cubic Metre Lift Bin</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Ideal for narrow alleys or small streets</li>
								<li>Building Sites</li>
							</ul>
						</div>

						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">


								<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 15 trailers</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="Product Trailer">
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
									<div class="circle">
										<div class="abs-circle-holder">
											<div class="content-holder">Approx x 64 wheelie bins</div>
											<div class="icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="Product Bin">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="abs-holder-button">Get a quote for this skip bin</div>
				</div>

			</div>
		</div>
	</div>

</div>


<?php
get_footer();
