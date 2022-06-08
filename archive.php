<?php
/*
 * template for archive pages
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="evolutiondesuka-body-content">
   <?php if ( have_posts() ) : ?>

      <header class="page-header alignwide">
         <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
         <?php if ( $description ) : ?>
            <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
         <?php endif; ?>
      </header><!-- .page-header -->

      <?php while ( have_posts() ) : ?>
         <?php the_post(); ?>
         <?php get_template_part( 'template-parts/content/content', 'excerpt' ); ?>
      <?php endwhile; ?>

      <?php evolutiondesuka_the_posts_navigation(); ?>

   <?php else : ?>
      <?php get_template_part( 'template-parts/content/content-none' ); ?>
   <?php endif; ?>
</div> <!-- evolutiondesuka-body-content -->

<?php get_footer(); ?>
