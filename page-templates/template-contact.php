<?php

/**
 * Template Name: Template Contact
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

<div class="page-header-holder">

	<div class="container">
		<div class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>
	</div>

</div>

<div class="wrapper template-contact-us" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.
						?>">

	<div class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">

			<div class="col-lg-6">

				<main class="site-main" id="main" role="main">

					<?php
					while (have_posts()) {
						the_post();
						get_template_part('loop-templates/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) {
							comments_template();
						}
					}
					?>

				</main>

			</div>

			<div class="offset-lg-1 col-lg-5">
				<div class="iframe-holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.296704304783!2d-0.18478542566300007!3d51.507268360004375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760549c90db40f%3A0x62228bed1d9f5868!2sPrincess%20Diana%20Memorial%20Fountain!5e0!3m2!1sen!2suk!4v1689758549478!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<div class="iframe-holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.296704304783!2d-0.18478542566300007!3d51.507268360004375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760549c90db40f%3A0x62228bed1d9f5868!2sPrincess%20Diana%20Memorial%20Fountain!5e0!3m2!1sen!2suk!4v1689758549478!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<div class="iframe-holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.296704304783!2d-0.18478542566300007!3d51.507268360004375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760549c90db40f%3A0x62228bed1d9f5868!2sPrincess%20Diana%20Memorial%20Fountain!5e0!3m2!1sen!2suk!4v1689758549478!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.
		?> -->

<?php
get_footer();
