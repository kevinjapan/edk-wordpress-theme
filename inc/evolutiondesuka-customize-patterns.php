<?php
/*
* Customize EvolutionDesuKa Block Patterns
*
* @package WordPress
* @subpackage EvolutionDesuKa
* @since EvolutionDesuKa 1.0
*/


require_once get_template_directory() . '/inc/evolutiondesuka-sanitize.php';


/*
 * evolutiondesuka_Register_Customize_Patterns
 */

class evolutiondesuka_Register_Customize_Patterns {

   public function __construct() {}

   public static function register ( $wp_customize ) {

      /*
       * EvolutionDesuKa patterns panel
       */
      if ( class_exists( 'WP_Customize_Panel' ) ) {
         if ( ! $wp_customize->get_panel( 'evolutiondesuka_patterns_panel' ) ) {
            $wp_customize->add_panel(
               'evolutiondesuka_patterns_panel',
               array(
                  'priority' => 25,
                  'title' => __( 'EvolutionDesuKa Block Patterns', 'evolutiondesuka' ),
                  'description' => __('Apply customizations to EvolutionDesuKa Block Pattern types across the site.
                                       <br>These changes will be applied to all instances
                                       of the selected block pattern on your site,
                                       thus ensuring consistency across your design.<br>
                                       Select EvolutionDesuKa Block Patterns under Patterns in the Editor\'s block inserter.<br>
                                       (Please note that because of limited space, width modifications are not applied 
                                       on Post and Page Templates with sidebars.)', 'evolutiondesuka'))
            );
         }
      }

      /*
       * sections
       */
      $wp_customize->add_section( 'evolutiondesuka_cover_patterns', 
         array('title'       => __( 'EvolutionDesuKa Covers', 'evolutiondesuka' ),
               'priority'    => 10,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Covers across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_column_patterns', 
         array('title'       => __( 'EvolutionDesuKa Columns', 'evolutiondesuka' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Columns across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_cover_column_patterns', 
         array('title'       => __( 'EvolutionDesuKa Cover-Columns', 'evolutiondesuka' ),
               'priority'    => 30,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Cover-Columns across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_grid_patterns', 
         array('title'       => __( 'EvolutionDesuKa Grids', 'evolutiondesuka' ),
               'priority'    => 40,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Grids across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_title_lead_patterns', 
         array('title'       => __( 'EvolutionDesuKa Title & Lead', 'evolutiondesuka' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Title & Leads across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_text_patterns', 
         array('title'       => __( 'EvolutionDesuKa Texts', 'evolutiondesuka' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Texts across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_image_patterns', 
         array('title'       => __( 'EvolutionDesuKa Images', 'evolutiondesuka' ),
               'priority'    => 60,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Images across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'evolutiondesuka_buttons_patterns', 
         array('title'       => __( 'EvolutionDesuKa Buttons', 'evolutiondesuka' ),
               'priority'    => 70,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all EvolutionDesuKa Buttons across the site here.', 'evolutiondesuka'),
               'panel' => 'evolutiondesuka_patterns_panel',
               'active_callback' => '') 
      );


      /*
       * settings and control pairs
       */


      
      /* cover block patterns */
      $wp_customize->add_setting( 'evolutiondesuka_cover_x_width',
         array('default'    => '100', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );

      $wp_customize->add_control( 'evolutiondesuka_cover_x_width', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_cover_patterns',
               'label' => __( 'covers.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_x_width', 
               'description' => __( '% width for EvolutionDesuKa covers.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 60, 'max' => 100, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_cover_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_cover_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_cover_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_y_margins', 
               'description' => __( '% above and below EvolutionDesuKa covers.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );

      /* column block patterns */
      $wp_customize->add_setting( 'evolutiondesuka_column_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_column_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_column_patterns',
               'label' => __( 'padding.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_column_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_column_top_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_column_top_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_column_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_column_top_padding', 
               'description' => __( '% top padding for EvolutionDesuKa columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_column_bottom_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_column_bottom_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_column_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_column_bottom_padding', 
               'description' => __( '% bottom padding for EvolutionDesuKa columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_column_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_column_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_column_patterns',
               'label' => __( 'margins','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_column_y_margins', 
               'description' => __( '% above and below EvolutionDesuKa columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );

      /* cover-column block patterns */
      $wp_customize->add_setting( 'evolutiondesuka_cover_column_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_cover_column_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_cover_column_patterns',
               'label' => __( 'cover column.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_column_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa cover-columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_cover_columns_y_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_cover_columns_y_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_cover_column_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_columns_y_padding', 
               'description' => __( '% vertical padding for EvolutionDesuKa cover-columns.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );

      /* cover-grid block patterns */
      $wp_customize->add_setting( 'evolutiondesuka_cover_grid_x_width',
         array('default'    => '90', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_cover_grid_x_width', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_grid_patterns',
               'label' => __( 'cover grids.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_grid_x_width', 
               'description' => __( '% width of EvolutionDesuKa cover grids.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 60, 'max' => 100, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_cover_grid_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_cover_grid_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_grid_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_cover_grid_y_margins', 
               'description' => __( '% above and below EvolutionDesuKa cover grids.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );

      /* media-text-grid block patterns 
      $wp_customize->add_setting( 'evolutiondesuka_media_text_grid_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_media_text_grid_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_grid_patterns',
               'label' => __( 'media text grids.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_media_text_grid_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa media text grids.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )
      ) );
      $wp_customize->add_setting( 'evolutiondesuka_media_text_grid_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_media_text_grid_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_grid_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_media_text_grid_y_margins', 
               'description' => __( '% above and below EvolutionDesuKa media text grids.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );
      */

      /* 
       * evolutiondesuka-image block pattern : 
       * wrap wp-block-image to enable our margin and padding applied across all evolutiondesuka-image blocks 
       */
      $wp_customize->add_setting( 'evolutiondesuka_image_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_image_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_image_patterns',
               'label' => __( 'images.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_image_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa images.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_image_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_image_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_image_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_image_y_margins', 
               'description' => __( '% vertical spacing for EvolutionDesuKa images.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      /* 
       * evolutiondesuka-gallery block pattern : 
       * wrap wp-block-image to enable our margin and padding applied across all evolutiondesuka-gallery blocks 
       */
      $wp_customize->add_setting( 'evolutiondesuka_gallery_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_gallery_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_image_patterns',
               'label' => __( 'galleries.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_gallery_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa galleries.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
      $wp_customize->add_setting( 'evolutiondesuka_gallery_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_gallery_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_image_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_gallery_y_margins', 
               'description' => __( '% vertical spacing for EvolutionDesuKa galleries.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      /* title & lead block pattern */
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_btwn_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_btwn_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( 'padding','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_btwn_padding', 
               'description' => __( '% padding between title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 80px;', 'step'	=> 1 ))
      );

      /* lead-text box padding */
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( 'padding','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_top_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_top_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( 'paddings','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_top_padding', 
               'description' => __( '% padding above EvolutionDesuKa title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_bottom_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_bottom_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_bottom_padding', 
               'description' => __( '% padding below for EvolutionDesuKa title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );
      
      /* lead-text margins */
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_top_margin',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_top_margin', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( 'margins','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_top_margin', 
               'description' => __( '% margin above EvolutionDesuKa title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );
      $wp_customize->add_setting( 'evolutiondesuka_title_lead_bottom_margin',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_title_lead_bottom_margin', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_title_lead_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_title_lead_bottom_margin', 
               'description' => __( '% margin below for EvolutionDesuKa title & lead.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      /* text block pattern */      
      $wp_customize->add_setting( 'evolutiondesuka_text_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_text_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_text_patterns',
               'label' => __( 'simple text.','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_text_x_padding', 
               'description' => __( '% horizontal padding for EvolutionDesuKa texts.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );
      $wp_customize->add_setting( 'evolutiondesuka_text_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'evolutiondesuka_sanitize_number_range') 
      );
      $wp_customize->add_control( 'evolutiondesuka_text_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'evolutiondesuka_text_patterns',
               'label' => __( '','evolutiondesuka'),
               'settings'   => 'evolutiondesuka_text_y_margins', 
               'description' => __( '% vertical spacing for EvolutionDesuKa texts.','evolutiondesuka'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
   }


  /*
   * EvolutionDesuKa frontend inline patterns styles
   * 
   * EvolutionDesuKa is cover-page first - full width with no sidebar is our default -
   * we exclude pattern width customizations from pages with sidebars (not enough space to play with)
   * .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) excludes width settings from 'Page With Sidebar' template pages
   */
  
   public static function evolutiondesuka_customizer_patterns_styles() {

      ?><!-- EvolutionDesuKa Patterns Customizer CSS --> 
<style id="evolutiondesuka-custom-patterns" type="text/css">
<?php 

      /* evolutiondesuka-cover block */
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover',
         ['style' => 'width','setting' => 'evolutiondesuka_cover_x_width','prefix'  => '','postfix' => '%'],);
      evolutiondesuka_gen_css_rule('.wp-block-cover.has-background-dim.evolutiondesuka-cover',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_cover_y_margins','prefix'  => '','postfix' => 'vh']);

      /* evolutiondesuka-columns block */ 
      evolutiondesuka_gen_css_rule(
         '.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-media-text.evolutiondesuka-columns,
          .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-media-text.evolutiondesuka-columns.has-background,
          .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-columns.evolutiondesuka-columns,
          .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-columns.evolutiondesuka-columns.has-background',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_column_x_padding','prefix'  => '','postfix' => '%']);
      evolutiondesuka_gen_css_rule('.wp-block-media-text.evolutiondesuka-columns,.wp-block-media-text.evolutiondesuka-columns.has-background,.wp-block-columns.evolutiondesuka-columns,.wp-block-columns.evolutiondesuka-columns.has-background',
         ['style' => 'padding-top','setting' => 'evolutiondesuka_column_top_padding','prefix'  => '','postfix' => 'vh'],
         ['style' => 'padding-bottom','setting' => 'evolutiondesuka_column_bottom_padding','prefix'  => '','postfix' => 'vh']);
      evolutiondesuka_gen_css_rule('.wp-block-media-text.evolutiondesuka-columns.evolutiondesuka-single-feature-columns,.wp-block-media-text.evolutiondesuka-columns.has-background,.wp-block-columns.evolutiondesuka-columns,.wp-block-columns.evolutiondesuka-columns.has-background',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_column_y_margins','prefix'  => '','postfix' => 'vh !important']);

      /* evolutiondesuka-cover-columns block */
      ?>@media screen and (min-width: 768px) { 
<?php
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover-columns,.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover-columns.has-background',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_cover_column_x_padding','prefix'  => '','postfix' => '%']);?>}
<?php
      evolutiondesuka_gen_css_rule('.evolutiondesuka-cover-columns, .evolutiondesuka-cover-columns.has-background',
         ['style' => 'padding-block','setting' => 'evolutiondesuka_cover_columns_y_padding','prefix'  => '','postfix' => 'vh']);

      /* evolutiondesuka-cover-grid block */
      evolutiondesuka_gen_css_rule('.wp-block-group.evolutiondesuka-cover-grid',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_cover_grid_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>@media screen and (min-width: 768px) {
<?php
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover-grid ',
         ['style' => 'width','setting' => 'evolutiondesuka_cover_grid_x_width','prefix'  => '','postfix' => '%'],);?>}
<?php
      /* evolutiondesuka-media-text-grid block */
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-media-text-grid',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_media_text_grid_x_padding','prefix'  => '','postfix' => '%']);
      evolutiondesuka_gen_css_rule('.evolutiondesuka-media-text-grid',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_media_text_grid_y_margins','prefix'  => '','postfix' => 'vh']);

      /* evolutiondesuka-image */
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) article .entry-content figure.wp-block-image.evolutiondesuka-image img',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_image_x_padding','prefix'  => '','postfix' => '%'],);
      evolutiondesuka_gen_css_rule('figure.wp-block-image.evolutiondesuka-image',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_image_x_padding','prefix'  => '','postfix' => '%'],);
      evolutiondesuka_gen_css_rule('article .entry-content figure.wp-block-image.evolutiondesuka-image img,article .entry-content figure.wp-block-image.evolutiondesuka-image.has-background img',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_image_y_margins','prefix'  => '','postfix' => 'vh']);

      /* evolutiondesuka-gallery */
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-gallery,.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-gallery.has-background',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_gallery_x_padding','prefix'  => '','postfix' => '%']);
      evolutiondesuka_gen_css_rule('.evolutiondesuka-gallery,.evolutiondesuka-gallery.has-background',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_gallery_y_margins','prefix'  => '','postfix' => 'vh']);

      /* evolutiondesuka-title-lead */
      evolutiondesuka_gen_css_rule('.wp-block-group.evolutiondesuka-title-lead',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_title_lead_bottom_margin','prefix'  => '','postfix' => 'vh']);
      ?>@media screen and (min-width: 768px) {
<?php
         evolutiondesuka_gen_css_rule('.evolutiondesuka-title-lead__title',
            ['style' => 'padding-bottom','setting' => 'evolutiondesuka_title_lead_btwn_padding','prefix'  => '','postfix' => 'vw']);
         evolutiondesuka_gen_css_rule(
            '.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-group.evolutiondesuka-title-lead,
             .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .wp-block-group.evolutiondesuka-title-lead.has-background ',
            ['style' => 'padding-inline','setting' => 'evolutiondesuka_title_lead_x_padding','prefix'  => '','postfix' => '%'],);
         evolutiondesuka_gen_css_rule('.wp-block-group.evolutiondesuka-title-lead',
            ['style' => 'padding-top','setting' => 'evolutiondesuka_title_lead_top_padding','prefix'  => '','postfix' => 'vh'],
            ['style' => 'padding-bottom','setting' => 'evolutiondesuka_title_lead_bottom_padding','prefix'  => '','postfix' => 'vh']);
      ?>}<?php
      /* evolutiondesuka-text */ 
      evolutiondesuka_gen_css_rule('.wp-block-group.evolutiondesuka-text.evolutiondesuka-simple-text',
         ['style' => 'margin-block','setting' => 'evolutiondesuka_text_y_margins','prefix'  => '','postfix' => 'vh']); 
      ?>@media screen and (min-width: 768px) {
<?php
      evolutiondesuka_gen_css_rule('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-text, .evolutiondesuka-text.has-background ',
         ['style' => 'padding-inline','setting' => 'evolutiondesuka_text_x_padding','prefix'  => '','postfix' => '%'],);?>}<?php
      ?>
</style> 
<!--/ EvolutionDesuKa Patterns Customizer CSS -->
      <?php
   }
}


/* setup theme customizer settings and controls */
add_action( 'customize_register', array( 'evolutiondesuka_Register_Customize_Patterns' , 'register' ) );


/* output custom css to frontend */
add_action( 'wp_head', array( 'evolutiondesuka_Register_Customize_Patterns' , 'evolutiondesuka_customizer_patterns_styles' ) );
