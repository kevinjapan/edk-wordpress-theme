<?php
/*
 * Template part for displaying post archives and search results
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <header class="entry-header">
      <?php
      the_title( sprintf( '<h2 class="entry-title entry-title--archive"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
      ?>
   </header><!-- .entry-header -->

	<div class="entry-content">
      <?php 
         the_excerpt();
      ?>
	</div><!-- .entry-content -->


	<div class="entry-footer evolutiondesuka-in-archive-list default-max-width">
		<?php evolutiondesuka_entry_meta_footer(); ?>
   </div><!-- .entry-footer -->


</article><!-- #post-${ID} -->
