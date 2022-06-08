<?php
/*
 * funcs to enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 * 
 */


/* add 'Untitled' to posts and pages that are missing titles */
if ( ! function_exists( 'evolutiondesuka_post_title' ) ) {
	function evolutiondesuka_post_title( $title ) {
		return '' === $title ? esc_html_x( 'Untitled', 'Added to posts and pages that are missing titles', 'evolutiondesuka' ) : $title;
	}
}
add_filter( 'the_title', 'evolutiondesuka_post_title' );


