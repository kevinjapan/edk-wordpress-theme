<?php
/*
 * Template part for displaying post content
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */
?>

<article class="evolutiondesuka_post " <?php post_class(); ?>>

   <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <?php // in EvolutionDesuKa theme - featured images are displayed as indvdl page headers ?>
   </header><!-- .entry-header -->

   <div class="entry-content">

      <?php
      the_content();

      wp_link_pages(
         array(
            'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'evolutiondesuka' ) . '">',
            'after'    => '</nav>',
            /* translators: %: Page number. */
            'pagelink' => esc_html__( 'Page %', 'evolutiondesuka' ),
         )
      );
      ?>

   </div><!-- .entry-content -->


   <div class="entry-footer default-max-width">
      <?php evolutiondesuka_entry_meta_footer(); ?>
   </div><!-- .entry-footer -->
   

</article>
