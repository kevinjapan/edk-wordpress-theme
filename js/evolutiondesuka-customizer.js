/*
 * EvolutionDesuKa Customizer live preview
 */

/* 
 * exclude width settings from 'Page With Sidebar' template by:
 * .evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) 
 */


( function( $ ) {

	wp.customize('blogname', function(setting) {
		setting.bind(function(value) {
			$('.evolutiondesuka_titles h1 a').text(value);
		});
	});
	wp.customize('blogdescription', function(setting) {
		setting.bind(function(value) {
			$('.evolutiondesuka--tagline').text(value);
		});
	});
   wp.customize('frontpage_header_height', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_frontpage .evolutiondesuka-site-header').css('height', value + 'vh'); 
      } );
   } );
   wp.customize('header_height', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-site-header').css('height', value + 'vh'); 
      } );
   } );

   /*
    * main nav
    */
   wp.customize('nav_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation a').css('color',value); 
      } );
   } );
   wp.customize('nav_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation_bg').css('background-color',value); 
      } );
   } );
   wp.customize('nav_bg_opacity', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation_bg').css('filter', 'opacity(' + value + ')'); 
      } );
   } );
   wp.customize('nav_dropdown_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation .evolutiondesuka_dropdown .sub-menu a').css('color',value); 
      } );
   } );
   wp.customize('nav_dropdown_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation .evolutiondesuka_dropdown .sub-menu').css('background-color',value); 
      } );
   } );
   /*wp.customize('nav_dropdown_bg_opacity', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation .evolutiondesuka_dropdown .sub-menu').css('filter', 'opacity(' + value + ')'); 
      } );
   } );*/
   
   


   /*
    *archive pages header img
    */
   wp.customize('blog_header_img', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-site-header-bg').css('background-image', 'url(' + value + ')'); 
      } );
   } );

   /* 
    * site title overlay 
    */
   wp.customize('site_title_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles,.evolutiondesuka_titles a').css('color', value );
      } );
   } );
   wp.customize('site_title_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles__bg').css('background-color', value );
      } );
   } );
   wp.customize('site_title_bg_opacity', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles__bg').css('filter', 'opacity(' + value + ')');
      } );
   } );

   /*
    *  site tagline overlay 
    */
   wp.customize('site_tagline_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles--tagline_bg').css('background-color', value );
      } );
   } );
   wp.customize('site_tagline_bg_opacity', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles--tagline_bg').css('filter', 'opacity(' + value + ')');
      } );
   } );

   /*
    * site header bg
    */
   wp.customize('frontpage_header_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_frontpage .evolutiondesuka-site-header::before').css('background-color',value); 
      } );
   } );

   /*
    * hero text
    */
   wp.customize('evolutiondesuka_hero_text', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text > h1').text(value);
      } );
   } );

   wp.customize('evolutiondesuka_hero_text_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text,.evolutiondesuka_hero_text a,.evolutiondesuka_hero_text h1,.evolutiondesuka_hero_text h2,.evolutiondesuka_hero_text h3').css('color', value );
      } );
   } );
   wp.customize('evolutiondesuka_hero_text_bg_color', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text_bg').css('background-color', value );
      } );
   } );
   wp.customize('evolutiondesuka_hero_text_bg_opacity', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text_bg').css('filter', 'opacity(' + value + ')');
      } );
   } );
   wp.customize('evolutiondesuka_hero_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text').css('align-self', value );
      } );
   } );
   wp.customize('evolutiondesuka_hero_text_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text').css('text-align', value );
      } );
   } );
   wp.customize('hero_x_width', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text').css('width', value + 'vw');
      } );
   } );

   /*
    * header alignment
    */
   wp.customize('evolutiondesuka_header_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-site-header').css('align-items', value );
      } );
   } );
   wp.customize('evolutiondesuka_header_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles').css('align-self', value );
      } );
   } );
   wp.customize('evolutiondesuka_header_text_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles__title,.evolutiondesuka_titles__title h1').css('text-align', value );
      } );
   } );
   wp.customize('evolutiondesuka_header_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka--tagline').css('align-self', value );
      } );
   } );
   wp.customize('evolutiondesuka_header_text_align', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_titles__title.evolutiondesuka--tagline,.evolutiondesuka_titles__title.evolutiondesuka--tagline h3').css('text-align', value );
      } );
   } );


   /*
    * custom fonts : order important 
    */
   const fallback_fonts = ',serif,verdana';  /* fallback system fonts - see body in evolutiondesuka-main.css */

   wp.customize('evolutiondesuka_body_fonts', function(setting) {
      setting.bind( function(value) {
         $('body').css('font-family', value + fallback_fonts );
      } );
   } );
   wp.customize('evolutiondesuka_nav_fonts', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka-navigation').css('font-family', value + fallback_fonts );
      } );
   } );
   wp.customize('evolutiondesuka_headings_fonts', function(setting) {
      setting.bind( function(value) {
         $('h1:not(.evolutiondesuka_title_heading),h2:not(.evolutiondesuka_title_heading),h3:not(.evolutiondesuka_title_heading),h4:not(.evolutiondesuka_title_heading),h5,h6').css('font-family', value + fallback_fonts );
      } );
   } );
   wp.customize('evolutiondesuka_tagline_fonts', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_title_heading:not(h1)').css('font-family', value + fallback_fonts );
      } );
   } );
   wp.customize('evolutiondesuka_title_fonts', function(setting) {
      setting.bind( function(value) {
         $('h1.evolutiondesuka_title_heading').css('font-family', value + fallback_fonts );
      } );
   } );
   wp.customize('evolutiondesuka_hero_fonts', function(setting) {
      setting.bind( function(value) {
         $('.evolutiondesuka_hero_text h1').css('font-family', value + fallback_fonts );
      } );
   } );


   /*
    * copyright notice
    */
   wp.customize('evolutiondesuka_copyright', function(setting) {
      setting.bind( function(value) {
         $('.footer_copyright').text(value);
      } );
   } );


   /* 
    * block pattern layouts
    */
   wp.customize('evolutiondesuka_cover_x_width', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 100) value =  100;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover').css('width', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_cover_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-cover').css('margin-block', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_column_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-columns').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_column_top_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-columns, .evolutiondesuka-columns.has-background').css('padding-top', value + 'vh'); 
      } );
   } );
   wp.customize('evolutiondesuka_column_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-columns, .evolutiondesuka-columns.has-background').css('padding-bottom', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_column_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-columns').css('margin-block', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_cover_column_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover-columns').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_cover_columns_y_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-cover-columns').css('padding-block', value + 'vh');
      } );
   } );
   /*
    * evolutiondesuka-cover-grid
    */
   wp.customize('evolutiondesuka_cover_grid_x_width', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 100) value =  100;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-cover-grid').css('width', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_cover_grid_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-cover-grid').css('margin-block', value + 'vh');
      } );
   } );
   /*
    * evolutiondesuka-media-text-grid
    */
   wp.customize('evolutiondesuka_media_text_grid_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-media-text-grid').css('padding-inline', value + 'vw');
      } );
   } );
   wp.customize('evolutiondesuka_media_text_grid_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         $('.evolutiondesuka-media-text-grid').css('margin-block', value + 'vh');
      } );
   } );
   /*
    * evolutiondesuka-image
    */
   wp.customize('evolutiondesuka_image_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-image').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_image_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-image').css('margin-block', value + 'vh');
      } );
   } );
   /*
    * evolutiondesuka-gallery
    */
     wp.customize('evolutiondesuka_gallery_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-gallery').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_gallery_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-gallery').css('margin-block', value + 'vh');
      } );
   } );

   /*
    * text patterns
    */
   wp.customize('evolutiondesuka_title_lead_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-title-lead').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_title_lead_btwn_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-title-lead__title').css('padding-bottom', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_title_lead_top_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-title-lead').css('padding-top', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_title_lead_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-title-lead').css('padding-bottom', value + 'vh');
      } );
   } );
   
   wp.customize('evolutiondesuka_title_lead_top_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-title-lead').css('margin-top', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_title_lead_bottom_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-title-lead').css('margin-bottom', value + 'vh');
      } );
   } );
   wp.customize('evolutiondesuka_text_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-body-content:not(.evolutiondesuka-body-content--sidebar) .evolutiondesuka-text').css('padding-inline', value + '%');
      } );
   } );
   wp.customize('evolutiondesuka_text_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value =  0;
         if(value > 25) value =  25;
         $('.evolutiondesuka-text').css('margin-block', value + 'vh');
      } );
   } );
} )( jQuery );
