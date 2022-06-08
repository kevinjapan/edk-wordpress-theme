<?php 
/*
 * template for all single pages
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

get_header();

?>

   <div id="content" class="evolutiondesuka-body-content">

   <?php 
   /* Start the Loop */
   while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content/content-page' );

      // If comments are open or there is at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) {
         comments_template();
      }
   endwhile; // End of the loop.
   ?>

</div> <!-- evolutiondesuka-body-content-->


<?php get_footer();?>