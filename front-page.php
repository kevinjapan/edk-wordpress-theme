<?php 
/*
 * template for frontpage
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */
get_header('frontpage');?>

   <div id="content" class="evolutiondesuka-body-content evolutiondesuka_frontpage">
      
      <?php 
      /* Start the Loop */
      while ( have_posts() ) :
         the_post();
         get_template_part('template-parts/content/content-page');

         // If comments are open or there is at least one comment, load up the comment template.
         if (comments_open() || get_comments_number()) {
            comments_template();
         }
      endwhile; // End of the loop.

      // Previous/next page navigation.
      evolutiondesuka_the_posts_navigation();
      ?>

   </div> <!-- evolutiondesuka-body-content evolutiondesuka_frontpage -->

<?php get_footer();?>

