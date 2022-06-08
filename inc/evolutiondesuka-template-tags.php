<?php
/*
 * Custom template tags for EvolutionDesuKa theme
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

/* meta information for the current post-date/time */
if ( ! function_exists( 'evolutiondesuka_posted_on' ) ) {
	function evolutiondesuka_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
		echo '<span class="posted-on">';
		printf(
			/* translators: %s: Publish date. */
			esc_html__( 'Published %s', 'evolutiondesuka' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}

/* meta information about author */
if ( ! function_exists( 'evolutiondesuka_posted_by' ) ) {
	function evolutiondesuka_posted_by() {
		if ( ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
			echo '<span class="byline">';
			printf(
				/* translators: %s: Author name. */
				esc_html__( 'By %s', 'evolutiondesuka' ),
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a>'
			);
			echo '</span>';
		}
	}
}

/* meta information for the categories, tags and comments */
if ( ! function_exists( 'evolutiondesuka_entry_meta_footer' ) ) {
	function evolutiondesuka_entry_meta_footer() {
		if ( 'post' !== get_post_type() ) {return;}

		// no meta on pages
		if ( ! is_single() ) {

			if ( is_sticky() ) {
				echo '<p>' . esc_html_x( 'Featured post', 'Label for sticky posts', 'evolutiondesuka' ) . '</p>';
			}

			$post_format = get_post_format();
			if ( 'aside' === $post_format || 'status' === $post_format ) {
				echo '<p><a href="' . esc_url( get_permalink() ) . '">' . evolutiondesuka_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			evolutiondesuka_posted_on();

			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'evolutiondesuka' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span><br>'
			);

			if ( has_category() || has_tag() ) {

				echo '<div class="post-taxonomies">';

				/* translators: Used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'evolutiondesuka' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: List of categories. */
						'<span class="cat-links">' . esc_html__( 'Categorized as %s', 'evolutiondesuka' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				/* translators: Used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'evolutiondesuka' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: List of tags. */
						'<span class="tags-links">' . esc_html__( 'Tagged %s', 'evolutiondesuka' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		} else {

			echo '<div class="posted-by">';

			evolutiondesuka_posted_on();

			evolutiondesuka_posted_by();

			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'evolutiondesuka' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			echo '</div>';

			if ( has_category() || has_tag() ) {

				echo '<div class="post-taxonomies">';

				/* translators: Used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'evolutiondesuka' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: List of categories. */
						'<span class="cat-links">' . esc_html__( 'Categorized as %s', 'evolutiondesuka' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				/* translators: Used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'evolutiondesuka' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: List of tags. */
						'<span class="tags-links">' . esc_html__( 'Tagged %s', 'evolutiondesuka' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		}
	}
}

/* next and previous posts navigation */
if ( ! function_exists( 'evolutiondesuka_the_posts_navigation' ) ) {
	function evolutiondesuka_the_posts_navigation() {
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'evolutiondesuka' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? '>' : '<',
					wp_kses(
						__( 'Newer <span class="nav-short">posts</span>', 'evolutiondesuka' ),
						array('span' => array('class' => array()))
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						__( 'Older <span class="nav-short">posts</span>', 'evolutiondesuka' ),
						array('span' => array('class' => array()))
					),
					is_rtl() ? '<' : '>'
				),
			)
		);
	}
}
