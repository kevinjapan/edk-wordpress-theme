<?php
/*
 * template for 404 pages
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

get_header();
?>
<div class="evolutiondesuka-body-content">

	<header class="page-header alignwide">
		<h3 class="page-title"><?php esc_html_e( 'Page not found', 'evolutiondesuka' ); ?></h3>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'Sorry, we can\'t find a match for the page you requested.', 'evolutiondesuka' ); ?></p>
			<p><?php esc_html_e( '
         Perhaps you can find the information you are after by searching our site.', 'evolutiondesuka' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<!-- /evolutiondesuka-body-content -->
<?php
get_footer();
