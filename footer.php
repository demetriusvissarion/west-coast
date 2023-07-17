<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="footer-testimonial">
		<div class="container">
			<div class="testimonial">
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="quote">
					"Amazing customer service and very good price will be definitly getting another one through these guys when needed so much help thankyou."
				</div>
				<div class="author">Damon, facebook review</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="footer-contact-info">
			<div class="row">
				<div class="col-lg-6">
					<div class="title">Want to know more?</div>
					<div class="desc">To find out more about our services please contact us using any of the methods below, or alternatively fill in the contact form and a representative will be in touch as soon as possible.</div>
					<div class="contact-info">
						<div class="phone"><i class="fa fa-phone"></i> Call today 1800 927 831</div>
						<div class="email"><i class="fa fa-envelope-o"></i> Email info@westcoastwaste.com.au</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-form-holder">
						<?php echo do_shortcode('[contact-form-7 id="21" title="Footer Contact Form"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			© Copyright West Coast Waste 2023 <span>//</span> <a href="#">Terms & Conditions</a> <span>//</span> <a href="https://github.com/demetriusvissarion">Website by Demetrius</a>
		</div>
	</div>
</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php.
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>