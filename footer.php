<?php
/*
 * template for footer
 *
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */
?>
   <div class="footer">

      <div class="footer_menu">
         <?php wp_nav_menu(array(
            'theme_location' => 'footer-services-menu',
            'menu_class' => 'evolutiondesuka_footer_menu'));?>
      </div>

      <div class="footer_menu">
         <?php wp_nav_menu(array(
            'theme_location' => 'footer-info-menu',
            'menu_class' => 'evolutiondesuka_footer_menu'));?>
      </div>

      <div class="footer_menu footer_menu--widget">
         <?php if(is_active_sidebar('footer-sidebar')):?>
            <?php dynamic_sidebar('footer-sidebar');?>
         <?php endif;?>
      </div>

   </div><!-- footer-->

   <?php
      // footer--footnote : menu is horizontal (for 'privacy' etc)
   ?>
   <div class="footer footer--footnote">
      <div class="footer_menu footer_menu--footnote-menu">
         <?php wp_nav_menu(array(
            'theme_location' => 'footer-footnote-menu',
            'menu_class' => 'evolutiondesuka_footer_footnote_menu'));?>
      </div>
      <div class="footer_menu footer_menu--footnote-copy">
         <div class="footer_copyright"><?php echo esc_html(get_theme_mod('evolutiondesuka_copyright'));?></div>
      </div>
   </div><!-- footer footer--footnote -->

   <?php wp_footer();?>

</body>
</html>