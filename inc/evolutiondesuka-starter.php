<?php
/*
 * starter content
 * 
 * @since EvolutionDesuKa 1.0       
 *
 */

function evolutiondesuka_starter() {

	// Define and register starter content

      $starter_content = [
         // static front page, front and posts pages.
         'options' => [
            'show_on_front'  => 'page',
            'page_on_front'  => '{{home}}',
            'page_for_posts' => '{{blog}}',
         ],
         'posts' => [
            'home' => [
               'thumbnail' => '{{image-wood-1}}',
            ],
            'about' => [
               'thumbnail' => '{{image-beach-2}}',
               'post_content' => '<p class="lead">welcome to your EvolutionDesuKa theme install.</p>',
            ],
            'contact' => [
               'thumbnail' => '{{image-harbour-3}}',
            ],
            'blog' => [
               'thumbnail' => '{{image-harbour-1}}',
               'post_content' => '<p class="lead">create a post category called "blog" to set a header image in the customizer.</p>',
            ],
            'homepage-section' => [
               'thumbnail' => '{{image-red-wood-1}}',
            ],
         ],
         // nav menus for the theme locations
         'nav_menus' => [
            'navigation-menu' => [
               'name'  => __('Top Navigation Location', 'evolutiondesuka'),
               'items' => [
                  'link_home',
                  'page_blog',
                  'page_about',
                  'page_contact',
               ]
            ],
            'footer-services-menu' => [
               'name'  => __('Footer Services Location', 'evolutiondesuka'),
               'items' => ['page_blog',]
            ],
            'footer-info-menu' => [
               'name'  => __('Footer Info Location', 'evolutiondesuka'),
               'items' => [
                  'link_home',
                  'page_contact',
                  'page_about'
               ]
            ],
            'footer-footnote-menu' => [
               'name'  => __('Footer Footnote Location', 'evolutiondesuka'),
               'items' => [
                  'page_home',
                  'page_privacy'
               ]
            ]
         ],
         // widgets
         'widgets' => [
            'page-sidebar' => [
               'search'
            ],
            'post-sidebar' => [ 
               'search'
            ],
            'footer-sidebar' => [
               'search'
            ],
         ],
         // imgs
         'attachments' => [
            'image-beach-1' => [
               'post_title' => _x( 'beach', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/beach-1-hd.jpg',
            ],
            'image-beach-2' => [
               'post_title' => _x( 'beach', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/beach-2-hd.jpg',
            ],
            'image-harbour-1' => [
               'post_title' => _x( 'harbour', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/harbour-1-hd.jpg',
            ],
            'image-harbour-3' => [
               'post_title' => _x( 'harbour', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/harbour-3-hd.jpg',
            ],
            'image-stone-1' => [
               'post_title' => _x( 'beach', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/stone-1-hd.jpg',
            ],
            'image-red-brick-1' => [
               'post_title' => _x( 'beach', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/red-brick-1-hd.jpg',
            ],
            'image-wood-1'   => [
               'post_title' => _x( 'wood', 'Theme starter content', 'evolutiondesuka' ),
               'file'       => 'imgs/headers/wood-1-hd.jpg',
            ],
         ]   
      ];
   
      $starter_content = apply_filters( 'evolutiondesuka_starter_content', $starter_content );
      add_theme_support( 'starter-content', $starter_content );
}

add_action( 'after_setup_theme', 'evolutiondesuka_starter' );

