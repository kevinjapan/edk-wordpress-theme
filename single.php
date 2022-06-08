<?php 
/*
 * template for all single posts
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

get_header();

$content_mod = '';
$is_sidebar = get_theme_mod('evolutiondesuka_is_posts_sidebar');
$evolutiondesuka_body_content_mod = '';
if($is_sidebar) {
   $evolutiondesuka_body_content_mod = 'evolutiondesuka-body-content--sidebar';
   $content_mod = 'evolutiondesuka-body-content--sidebar__content';
}


/* Start the Loop */
while ( have_posts() ) :
	the_post();
   ?>

   <div id="content" class="evolutiondesuka-body-content <?php echo $evolutiondesuka_body_content_mod;?>"  >

      <?php
      if($is_sidebar) {
         ?>
         <div class="evolutiondesuka-body-content--sidebar__sidebar">
            <?php if(is_active_sidebar('post-sidebar')):?>
               <?php dynamic_sidebar('post-sidebar');?>
            <?php endif;?>
         </div>
         <?php
      }?>

      <?php if($content_mod !== '') {
         echo ('<div class="<?php echo $content_mod;?>"> <!-- sidebar-content -->');
      }?>

         <?php get_template_part('template-parts/content/content-single'); ?>

         <?php
         if ( is_attachment() ) {
            // Parent post navigation.
            the_post_navigation(
               array(
                  /* translators: %s: Parent post link. */
                  'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'evolutiondesuka' ), '%title' ),
               )
            );
         }

         // If comments are open or there is at least one comment, load up the comment template.
         if ( comments_open() || get_comments_number() ) {
            comments_template();
         }

         the_post_navigation(
         array(
               'next_text' => '<p class="meta-nav">Next post ></p><p class="post-title">%title</p>',
               'prev_text' => '<p class="meta-nav">< Previous post</p><p class="post-title">%title</p>',
            )
         );
         ?>

      <?php if($content_mod !== '') echo ('</div> <!-- /sidebar-content -->');?>
   </div> <!-- /evolutiondesuka-body-content -->
   <?php 

endwhile; // End of the loop.

get_footer();

?>

