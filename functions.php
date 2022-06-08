<?php
/*
 * EvolutionDesuKa Theme - functions and definitions
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

if ( ! function_exists( 'evolutiondesuka_setup' ) ) {

	/*
	 * theme defaults and support for WordPress features.
	 */

   function evolutiondesuka_setup() {

      /* utility */
      $template_dir = esc_url(get_template_directory_uri());

      /*
       * theme support
       */
		add_theme_support('title-tag');
		add_theme_support('html5',array('comment-form','comment-list','gallery','caption','style','script','navigation-widgets'));
      add_theme_support('post-thumbnails');  /* featured images */
      add_theme_support('thumbnail');
      add_theme_support('widgets');
      add_theme_support('editor-styles');
      add_theme_support('wp-block-styles');
		add_theme_support( 'align-wide' );
      add_editor_style('editor-style.css');
      add_theme_support('automatic-feed-links');
      
		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');


      /*
       * theme menus
       */
      register_nav_menus(
         array(
            'navigation-menu' => 'Top Navigation Location',
            'footer-services-menu' => 'Footer Services Location',
            'footer-info-menu' => 'Footer Info Location',
            'footer-footnote-menu' => 'Footer Footnote Location'
         )
      );

      /*
       * custom image sizes
       * 
       *  wordpress generates on img upload:
       *   Thumbnail – cropped @ 150x150 - the_post_thumbnail('thumbnail')
       *   Medium – uncropped & resized 300x300 - the_post_thumbnail('medium');
       *   Large – uncropped and resized 1024x1024 – the_post_thumbnail('large');
       *   Full – original img uncropped & not resized – the_post_thumbnail('full');
       */
      $custom_header_args = array(
         'default-image'          => esc_url($template_dir) . '/imgs/headers/wood-1-hd.jpg',
         'thumbnail_url'          => esc_url($template_dir) . '/imgs/headers/wood-1-hd-thumbnail.jpg',
         'default-text-color'     => '#FFF',
         'width'                  => 1920,
         'height'                 => 1080,
         'flex-width'            => true,
         'flex-height'            => true
      );
      add_theme_support('custom-header',$custom_header_args);

      $header_images = array(
         'beach' => array(
               'url'           => esc_url($template_dir) . '/imgs/headers/beach-1-hd.jpg',
               'thumbnail_url' => esc_url($template_dir) . '/imgs/headers/beach-1-hd-thumbnail.jpg',
               'description'   => 'Desk',
         ),
         'red-brick' => array(
               'url'           => esc_url($template_dir) . '/imgs/headers/red-brick-1-hd.jpg',
               'thumbnail_url' => esc_url($template_dir) . '/imgs/headers/red-brick-1-hd-thumbnail.jpg',
               'description'   => 'Corridor',
         ),  
      );
      register_default_headers($header_images);

      add_image_size('evolutiondesuka-thumbnail',1920,1080,false);
      add_image_size('evolutiondesuka-blog-large',800,400,true);
      add_image_size('evolutiondesuka-blog-small',300,200,true);

      /*
       * custom logo
       */
      $defaults = array(
         'height'               => 40,
         'width'                => 40,
         'flex-height'          => true,
         'flex-width'           => true,
         'header-text'          => array( 'site-title', 'site-description' )
      );
      add_theme_support('custom-logo', $defaults);
   }

   add_theme_support('custom-background',
      array(
         'default-color' => 'ffffff',
      )
   );


}
add_action( 'after_setup_theme', 'evolutiondesuka_setup' );




// to do : re-do screenshot.jpg - not 'evolutiondesuka' - 
//         ensure - safely rename all prefixes
//         style.css / theme name etc 
//         all comments refering to 'evolutiondesuka' / pattern names etc
//         all customizer labels and text



/*
 * starter content
 */
require_once get_template_directory() . '/inc/evolutiondesuka-starter.php';


/*
 * EvolutionDesuKa styles included in editor
 */
function evolutiondesuka_block_editor_styles() {
   wp_enqueue_style( 'my-editor-styles-mods', esc_url(get_template_directory_uri()) . '/css/evolutiondesuka-block-pattern-mods.css' );
   wp_enqueue_style( 'my-editor-styles-additionals', esc_url(get_template_directory_uri()) . '/css/evolutiondesuka-additionals.css' );
}
add_action( 'enqueue_block_editor_assets','evolutiondesuka_block_editor_styles');


/*
 * defaults on adding image block
 */
function evolutiondesuka_custom_image_size() {
   update_option('image_default_align', 'center' );
   update_option('image_default_size', 'large' ); 
}
add_action('after_setup_theme', 'evolutiondesuka_custom_image_size');


/* 
 * widget sidebars
 */
function evolutiondesuka_sidebars_init() {
   register_sidebar(
      array(
         'name' => esc_html__('Page Sidebar','evolutiondesuka'),
			'description' => esc_html__( 'Add widgets here to appear alongside your pages.', 'evolutiondesuka' ),
         'id' => 'page-sidebar',
         'before_widget' => '<div class="site_sidebar">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="">',
         'after_title' => '</h4>'
      )
   );
   register_sidebar(
      array(
         'name' => esc_html__('Post Sidebar','evolutiondesuka'),
			'description' => esc_html__( 'Add widgets here to appear alongside your posts.', 'evolutiondesuka' ),
         'id' => 'post-sidebar',
         'before_widget' => '<div class="site_sidebar">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="">',
         'after_title' => '</h4>'
      )
   );
   register_sidebar(
      array(
         'name' => esc_html__('Footer Sidebar','evolutiondesuka'),
			'description' => esc_html__( 'Add widgets here to appear in your footer.', 'evolutiondesuka' ),
         'id' => 'footer-sidebar',
         'before_title' => '<h4 class="footer_widget_title">',
         'after_title' => '</h4>'
      )
   );
}
add_action( 'widgets_init', 'evolutiondesuka_sidebars_init' );


/*
 * inc css and js
 */
function evolutiondesuka_scripts() {

   $template_dir = esc_url(get_template_directory_uri());

   /* 
    * theme styles 
    */
   wp_register_style('evolutiondesuka-main',$template_dir . '/css/evolutiondesuka-main.css',array(),false,'all');
   wp_enqueue_style('evolutiondesuka-main');
   wp_register_style('evolutiondesuka-navigation',$template_dir . '/css/evolutiondesuka-nav.css',array(),false,'all');
   wp_enqueue_style('evolutiondesuka-navigation');
   wp_register_style('evolutiondesuka-block-pattern-mods',$template_dir . '/css/evolutiondesuka-block-pattern-mods.css',array(),false,'all');
   wp_enqueue_style('evolutiondesuka-block-pattern-mods');
   wp_register_style('evolutiondesuka-block-pattern-mods-fe',$template_dir . '/css/evolutiondesuka-block-pattern-mods-fe.css',array(),false,'all');
   wp_enqueue_style('evolutiondesuka-block-pattern-mods-fe');
   wp_register_style('evolutiondesuka-additionals',$template_dir . '/css/evolutiondesuka-additionals.css',array(),false,'all');
   wp_enqueue_style('evolutiondesuka-additionals');

   /* 
    * scripts
    */
   wp_enqueue_script('jquery');
   wp_register_script('evolutiondesuka-navigation',$template_dir . '/js/evolutiondesuka-navigation.js','',false,true);
   wp_enqueue_script('evolutiondesuka-navigation');
  
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
   }

}
add_action( 'wp_enqueue_scripts', 'evolutiondesuka_scripts' );


/*
 * filter the "read more" excerpt string link to the post
 */
function evolutiondesuka_excerpt_more( $more ) {
   if ( ! is_single() ) {
       $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
           get_permalink( get_the_ID() ),
           __( 'Read More', 'evolutiondesuka' )
       );
   }

   return $more;
}
add_filter( 'excerpt_more', 'evolutiondesuka_excerpt_more' );


/*
 * create continue reading text
 */
function evolutiondesuka_continue_reading_text() {
	$continue_reading = sprintf(
		/* translators: %s: Name of current post. */
		esc_html__( 'Continue reading %s', 'evolutiondesuka' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	);

	return $continue_reading;
}

/*
 * create the continue reading link for excerpt
 */
function evolutiondesuka_continue_reading_link_excerpt() {
	if ( ! is_admin() ) {
		return '&hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . evolutiondesuka_continue_reading_text() . '</a>';
	}
}

// filter the excerpt more link.
add_filter( 'excerpt_more', 'evolutiondesuka_continue_reading_link_excerpt' );

// enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/evolutiondesuka-template-functions.php';

// menu functions and filters.
require get_template_directory() . '/inc/evolutiondesuka-menu-functions.php';

// custom template tags for the theme.
require get_template_directory() . '/inc/evolutiondesuka-template-tags.php';


/*
 * EvolutionDesuKa block patterns
 */
require_once get_template_directory() . '/inc/evolutiondesuka-block-patterns.php';

/*
 * customizer
 * must be included last
 */
require_once get_template_directory() . '/inc/evolutiondesuka-customize-theme.php';
require_once get_template_directory() . '/inc/evolutiondesuka-customize-patterns.php';

/* 
 * enqueue preview javascript in theme customizer admin screen
 */
function evolutiondesuka_customizer_live_preview() {
   wp_enqueue_script( 'custom_css_preview', esc_url(get_template_directory_uri()) . '/js/evolutiondesuka-customizer.js', 
      array( 'customize-preview', 'jquery' ) );
}
add_action( 'customize_preview_init', 'evolutiondesuka_customizer_live_preview' );


?>
