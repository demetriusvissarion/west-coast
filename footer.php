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

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php.
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>