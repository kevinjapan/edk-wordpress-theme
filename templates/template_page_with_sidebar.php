<?php
/*
Template Name: Page With Sidebar
*/

get_header();

?>


<div id="content" class="evolutiondesuka-body-content evolutiondesuka-body-content--sidebar">


   <div class="evolutiondesuka-body-content--sidebar__content">
      <?php
      while ( have_posts() ) :

         the_post();
         get_template_part( 'template-parts/content/content-page' );
         
         if (comments_open() || get_comments_number()) {
            comments_template();
         }

      endwhile;
      ?>
   </div>

   <div class="evolutiondesuka-body-content--sidebar__sidebar">
      <?php if(is_active_sidebar('page-sidebar')):?>
         <?php dynamic_sidebar('page-sidebar');?>
      <?php endif;?>
   </div>
   
</div>


<?php get_footer();?>