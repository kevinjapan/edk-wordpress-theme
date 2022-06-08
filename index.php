<?php
/**
 * 'latest posts as frontpage' template
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

get_header();
?>
<div class="evolutiondesuka-body-content">
   <?php 

   if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
      <header class="page-header alignwide">
         <h1 class="page-title"><?php single_post_title(); ?></h1>
      </header><!-- .page-header -->
   <?php endif; ?>

   <?php
   if ( have_posts() ) {

      // Load posts loop.
      while ( have_posts() ) {
         the_post();
         get_template_part( 'template-parts/content/content', 'excerpt' );
      }

      // Previous/next page navigation.
      evolutiondesuka_the_posts_navigation();

   } else {

      // If no content, include the "No posts found" template.
      get_template_part( 'template-parts/content/content-none' );

   }
   ?>
</div> <!-- evolutiondesuka-body-content -->
<?php

get_footer();
