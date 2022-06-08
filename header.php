<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <?php
   /* 
    * Header Image
    * cascades: featured img (or blog archive img); defaults to Custom Header Image; fallback is no image
    */

   require_once get_template_directory() . '/inc/evolutiondesuka-header-utility.php';

   $blog_title = get_bloginfo();

   ?>
   <?php wp_head();?>

</head>

<?php 
// allow space for frontend admin bar if present
$evolutiondesuka_is_admin_bar = get_theme_mod('evolutiondesuka_is_admin_bar');
$is_sticky = get_theme_mod('evolutiondesuka_is_nav_sticky');
$admin_bar_spacer = '';
if($is_sticky){
   $nav_pos_style = 'sticky';
   global $show_admin_bar;
   if($show_admin_bar) {$admin_bar_spacer = 'top:32px;';}
}
else {
   $nav_pos_style = 'relative';
}

?> 

<body id="body"  <?php body_class(); ?>>
   
<?php wp_body_open(); ?>

   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content','evolutiondesuka');?></a>

   <div class="evolutiondesuka-navigation" id="evolutiondesuka-navigation" 
        style="position:<?php echo $nav_pos_style;?>;<?php echo $admin_bar_spacer;?>">
      
      <div class="evolutiondesuka-navigation_bg"></div>
      
      <div class="evolutiondesuka-nav_logo">
         <?php
            if ( function_exists( 'the_custom_logo' ) ) {
               the_custom_logo();
            }
         ?>
         <div class="evolutiondesuka-nav_logo_text"><?php bloginfo('name'); ?></div>
      </div>

      <div id="evolutiondesuka_dropdown" class="evolutiondesuka_dropdown" data-evolutiondesuka-dropdown>
         <button class="evolutiondesuka_dropdown__hamburger" data-evolutiondesuka-dropdown-button style="color:white;"></button>
         <button class="evolutiondesuka-open-site-menu sub-menu-toggle screen-reader-text"  
            data-evolutiondesuka-dropdown-button>Open Site Menu</button>
         <div class="evolutiondesuka_dropdown__menu">
            <div class="evolutiondesuka_dropdown_bg"></div>
            <?php wp_nav_menu(array('theme_location' => 'navigation-menu','menu_class' => 'menu'));?>
            <div class="evolutiondesuka_dropdown__close" data-evolutiondesuka-dropdown-button>close menu</div>
         </div>
      </div>
      
   </div><!-- .evolutiondesuka-navigation -->

   <div id="evolutiondesuka-site-header" class="evolutiondesuka-site-header">
    
      <div class="evolutiondesuka-site-header-bg"><?php echo evolutiondesuka_header_img_tag();?></div>

      <div class="evolutiondesuka_titles">
         <div class="evolutiondesuka_titles__title">
            <div class="evolutiondesuka_titles__bg"></div>
            <h1 class="text_center evolutiondesuka_title_heading">
               <a href="<?php echo  esc_url(home_url(),'evolutiondesuka'); ?>"><?php bloginfo('name'); ?></a>
            </h1>
         </div>
         <div class="evolutiondesuka_titles__title evolutiondesuka--tagline">
            <div class="evolutiondesuka_titles__bg evolutiondesuka_titles--tagline_bg"></div>
            <h3 class="evolutiondesuka_title_heading">
               <a href="<?php echo  esc_url(home_url(),); ?>"><?php bloginfo('description'); ?></a></h3>
         </div>
      </div>

   </div> <!-- .evolutiondesuka-site-header -->


