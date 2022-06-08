<?php
/*
 * EvolutionDesuKa Block Patterns
 * @package WordPress
 * @subpackage EvolutionDesuKa
 * @since EvolutionDesuKa 1.0
 */

/*
 * Register Block Pattern Categories
 */
function evolutiondesuka_register_block_categories() { 
	register_block_pattern_category('evolutiondesuka-cover-blocks', ['label' => __('EvolutionDesuKa covers', 'evolutiondesuka')]);
	register_block_pattern_category('evolutiondesuka-column-blocks', ['label' => __('EvolutionDesuKa columns', 'evolutiondesuka')]);
	register_block_pattern_category('evolutiondesuka-cover-column-blocks', ['label' => __('EvolutionDesuKa cover-columns', 'evolutiondesuka')]);
	register_block_pattern_category('evolutiondesuka-grids', ['label' => __('EvolutionDesuKa grids', 'evolutiondesuka')]);   
	register_block_pattern_category('evolutiondesuka-texts', ['label' => __('EvolutionDesuKa texts', 'evolutiondesuka')]); 
	register_block_pattern_category('evolutiondesuka-images', ['label' => __('EvolutionDesuKa images', 'evolutiondesuka')]); 
	register_block_pattern_category('evolutiondesuka-buttons', ['label' => __('EvolutionDesuKa buttons', 'evolutiondesuka')]);   
}
add_action( 'init', 'evolutiondesuka_register_block_categories' );


function evolutiondesuka_register_block_patterns() {

   $site_uri = get_template_directory_uri();
   
   /*
    * single feature cover block
    */
	register_block_pattern('evolutiondesuka-single-feature-cover', [
		'title' => __('Single Feature Cover', 'evolutiondesuka'),
      'description' => _x( 'Single Feature Cover.', 'A Cover block with a single feature.', 'evolutiondesuka' ),            
		'keywords' => ['single,cover'],
		'categories' => ['evolutiondesuka-cover-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:cover {"className":"evolutiondesuka-cover"} -->
         <div class="wp-block-cover has-background-dim evolutiondesuka-cover">
         <div class="wp-block-cover__inner-container">
         
         <!-- wp:columns -->
         <div class="wp-block-columns"><!-- wp:column -->
         <div class="wp-block-column"><!-- wp:heading {"className":"has-text-align-right"} -->
         <h2 class="has-text-align-right">Introducing the EvolutionDesuKa Cover Block..</h2>
         <!-- /wp:heading --></div>
         <!-- /wp:column -->
         
         <!-- wp:column -->
         <div class="wp-block-column"><!-- wp:paragraph -->
         <p>Cover Blocks with Latitude! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis metus sed enim ullamcorper tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nibh ut elit condimentum tempor sit amet sed risus.<br>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Covers...</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns -->
         
         </div></div>
         <!-- /wp:cover -->'
	]);


   /*
    * two feature cover block
    */
   register_block_pattern('evolutiondesuka-two-feature-cover', [
		'title' => __('Two Feature Cover', 'evolutiondesuka'),
      'description' => _x( 'Two Feature Cover.', 'A Cover block with two features columns.', 'evolutiondesuka' ),            
		'keywords' => ['two,cover'],
		'categories' => ['evolutiondesuka-cover-blocks'],
		'viewportWidth' => 1000,
		'content' =>   
         '<!-- wp:cover {"className":"evolutiondesuka-cover evolutiondesuka-two-feature-cover"} -->
         <div class="wp-block-cover has-background-dim evolutiondesuka-cover evolutiondesuka-two-feature-cover">
         <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":2} -->
         <h2 class="has-text-align-center">Some interesting projects may require a longer title to project the gist of the thing</h2>
         <!-- /wp:heading -->
         <!-- wp:columns -->
         <div class="wp-block-columns"><!-- wp:column -->
         <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
         <h3 class="has-text-align-center">discover projects</h3>
         <!-- /wp:heading -->
         <!-- wp:paragraph {"align":"center"} -->
         <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam? </p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph {"align":"center"} -->
         <p class="has-text-align-center">discover projects</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --> 
         <!-- wp:column -->
         <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
         <h3 class="has-text-align-center">align your layouts</h3>
         <!-- /wp:heading -->
         <!-- wp:paragraph {"align":"center"} -->
         <p class="has-text-align-center"> You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Covers.. </p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph {"align":"center"} -->
         <p class="has-text-align-center">read more</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns -->
        </div></div>
         <!-- /wp:cover -->',
	]);

   /*
    * three feature cover block
    */   
	register_block_pattern('evolutiondesuka-three-feature-cover', [
		'title' => __('Three Feature Cover', 'evolutiondesuka'),
      'description' => _x( 'Three Feature Cover.', 'A Cover block with three features columns.', 'evolutiondesuka' ),            
		'keywords' => ['three,cover'],
		'categories' => ['evolutiondesuka-cover-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
           '<!-- wp:cover {"className":"evolutiondesuka-cover evolutiondesuka-three-feature-cover"} -->
           <div class="wp-block-cover has-background-dim evolutiondesuka-cover evolutiondesuka-three-feature-cover">
           <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
           <h2 class="has-text-align-center">three feature cover block pattern</h2>
           <!-- /wp:heading -->
           <!-- wp:heading {"textAlign":"center","level":3} -->
           <h3 class="has-text-align-center">this is a useful block pattern for services</h3>
           <!-- /wp:heading -->
           <!-- wp:columns -->
           <div class="wp-block-columns"><!-- wp:column {"className":"evolutiondesuka_opaque_bg"} -->
           <div class="wp-block-column evolutiondesuka_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
           <h3 class="has-text-align-center">service #1</h3>
           <!-- /wp:heading -->
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam? </p>
           <!-- /wp:paragraph -->
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center">read more</p>
           <!-- /wp:paragraph --></div>
           <!-- /wp:column -->
           <!-- wp:column {"className":"evolutiondesuka_opaque_bg"} -->
           <div class="wp-block-column evolutiondesuka_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
           <h3 class="has-text-align-center">service #2</h3>
           <!-- /wp:heading -->
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam? </p>
           <!-- /wp:paragraph -->
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center">explore projects</p>
           <!-- /wp:paragraph --></div>
           <!-- /wp:column -->
           <!-- wp:column {"className":"evolutiondesuka_opaque_bg"} -->
           <div class="wp-block-column evolutiondesuka_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
           <h3 class="has-text-align-center">service #3</h3>
           <!-- /wp:heading -->
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center"> You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Covers... </p>
           <!-- /wp:paragraph --> 
           <!-- wp:paragraph {"align":"center"} -->
           <p class="has-text-align-center">continue</p>
           <!-- /wp:paragraph --></div>
           <!-- /wp:column --></div>
           <!-- /wp:columns --></div></div>
           <!-- /wp:cover -->',
	]);

   /*
    * single feature columns block
    * we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
    */
    register_block_pattern('evolutiondesuka-single-feature-column', [
		'title' => __('Single Feature Column', 'evolutiondesuka'),
      'description' => _x( 'Single Feature Column.', 'A Column block with a single feature.', 'evolutiondesuka' ),            
		'keywords' => ['single,column'],
		'categories' => ['evolutiondesuka-column-blocks'],
		'viewportWidth' => 1000,
		'content' => 
            '<!-- wp:media-text 
            {"mediaLink":"' . $site_uri .'/imgs/pattern-imgs/harbour-1-md.jpg","mediaType":"image"} -->
            <div class="wp-block-media-text alignwide is-stacked-on-mobile evolutiondesuka-columns evolutiondesuka-single-feature-columns">
            <figure class="wp-block-media-text__media">
            <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-1-md.jpg" alt="harbour" />
            </figure>
            <div class="wp-block-media-text__content">
            <!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
            <p class="has-large-font-size">Introducing the single feature column</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>read more link</p>
            <!-- /wp:paragraph -->
            </div>
            </div>
            <!-- /wp:media-text -->'
	]);

   /*
    * two feature columns block
    */
	register_block_pattern('evolutiondesuka-two-feature-columns', [
		'title' => __('Two Feature Columns', 'evolutiondesuka'),
      'description' => _x( 'Two Feature Clolumns.', 'A Columns block with two features.', 'evolutiondesuka' ),            
		'keywords' => ['two,columns'],
		'categories' => ['evolutiondesuka-column-blocks'],
		'viewportWidth' => 1000,
		'content' => 
         '<!-- wp:columns {"className":"evolutiondesuka-columns evolutiondesuka-two-feature-columns"} -->
         <div class="wp-block-columns evolutiondesuka-columns evolutiondesuka-two-feature-columns"> 
         <!-- wp:column -->
         <div class="wp-block-column">
         <!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
         <figure class="wp-block-image size-medium">
         <img src="' . $site_uri .'/imgs/pattern-imgs/kreels-md.jpg" alt="kreels" /></figure>
         <!-- /wp:image -->
         <!-- wp:heading  {"align":"center"} -->
         <h2 class="has-text-align-center">two faature column</h2>
         <!-- /wp:heading -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">read more link</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column -->
         <!-- wp:column -->
         <div class="wp-block-column"> 
         <!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
         <figure class="wp-block-image size-medium">
         <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-3-md.jpg" alt="harbour" /></figure>
         <!-- /wp:image -->
         <!-- wp:heading  {"align":"center"} -->
         <h2 class="has-text-align-center">title here</h2>
         <!-- /wp:heading -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">another link here</p>
         <!-- /wp:paragraph -->
         </div>
         <!-- /wp:column -->
         </div>
         <!-- /wp:columns -->',
	]);


   /*
    * three feature columns block   
    */

	register_block_pattern('evolutiondesuka-three-feature-columns', [
		'title' => __('Three Feature Columns', 'evolutiondesuka'),
      'description' => _x( 'Three Feature Columns.', 'A Columns block with three features.', 'evolutiondesuka' ),            
		'keywords' => ['three,keywords'],
		'categories' => ['evolutiondesuka-column-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:columns {"className":"evolutiondesuka-columns evolutiondesuka-three-feature-columns"} -->
            <div class="wp-block-columns evolutiondesuka-columns evolutiondesuka-three-feature-columns">
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/pattern-imgs/kreels-md.jpg" alt="kreels"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading -->
            <h2>three feature columns</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">learn more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->        
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-1-md.jpg" alt="harbour"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">responsive layout</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">read more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-3-md.jpg" alt="harbour"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading -->
            <h2>keep me hanging on</h2>
            <!-- /wp:heading -->        
            <!-- wp:paragraph -->
            <p>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Columns...</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">read more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
	]);


   /*
    * six feature columns block
    */
    register_block_pattern('evolutiondesuka-six-feature-column', [
		'title' => __('Six Feature Columns', 'evolutiondesuka'),
      'description' => _x( 'Six Feature Columns.', 'A Columns block with six features.', 'evolutiondesuka' ),            
		'keywords' => ['six,columns'],
		'categories' => ['evolutiondesuka-column-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:columns {"className":"evolutiondesuka-columns evolutiondesuka-six-feature-columns"} -->
            <div class="wp-block-columns evolutiondesuka-columns evolutiondesuka-six-feature-columns">
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/beach-1-sm.jpg" alt="beach" /></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/beach-2-sm.jpg" alt="beach"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-1-sm.jpg" alt="harbour"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/harbour-2-sm.jpg" alt="harbour"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/red-brick-1-sm.jpg" alt="red brick wall"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"evolutiondesuka_center_content"} -->
            <div class="wp-block-column evolutiondesuka_center_content">
            <!-- wp:image {"linkDestination":"none"} -->
            <figure class="wp-block-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/stone-1-sm.jpg" alt="stone texture"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            </div><!-- /wp:columns -->',
   ]);

                     
   /*
    * three feature cover-columns block
    */
    register_block_pattern('evolutiondesuka-three-feature-cover-columns', [
		'title' => __('Three Feature Cover-Columns', 'evolutiondesuka'),
      'description' => _x( 'Three Feature Cover Columns.', 'Combining three feature columns over a cover block.', 'evolutiondesuka' ),            
		'keywords' => ['three,cover-column'],
		'categories' => ['evolutiondesuka-cover-column-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:columns {"className":"evolutiondesuka-cover-columns evolutiondesuka-three-feature-cover-columns"} -->
            <div class="wp-block-columns evolutiondesuka-cover-columns evolutiondesuka-three-feature-cover-columns"><!-- wp:column -->
            <div class="wp-block-column">
            <!-- wp:cover  -->
            <div class="wp-block-cover has-background-dim">
            <div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
            <h2 class="has-text-align-center">Dynamic</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph  {"textAlign":"center"} -->
            <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph  {"textAlign":"center"} -->
            <p class="has-text-align-center">read more</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
            <!-- wp:cover {} -->
            <div class="wp-block-cover has-background-dim">
            <div class="wp-block-cover__inner-container">                     
            <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
            <h2 class="has-text-align-center">Cover</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph  {"textAlign":"center"} -->
            <p class="has-text-align-center">mouse over to highlight this feature</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph  {"textAlign":"center"} -->
            <p class="has-text-align-center">explore</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
            <!-- wp:cover {} -->
            <div class="wp-block-cover has-background-dim">
            <div class="wp-block-cover__inner-container">                     
            <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
            <h2 class="has-text-align-center">Columns</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph  {"textAlign":"center"} -->
            <p class="has-text-align-center">You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Cover-Columns...</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textAlign":"center"} -->
            <p class="has-text-align-center">learn more</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->'
   ]);

   /*
    * title & lead text
    */
	register_block_pattern('evolutiondesuka-title-lead', [
		'title' => __('Title And Lead Text', 'evolutiondesuka'),
      'description' => _x( 'You can style all block patterns of this type in the customizer.', 'A title and lead text block.', 'evolutiondesuka' ),            
		'keywords' => ['title,lead,text'],
		'categories' => ['evolutiondesuka-texts'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:group {"className":"evolutiondesuka-title-lead"} -->
            <div class="wp-block-group evolutiondesuka-title-lead">
            <!-- wp:heading {"textAlign":"center","level":2} -->
            <h2 class="evolutiondesuka-title-lead__title has-text-align-center">Title & Lead Text</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Texts...</p>
            <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->'
      ]);
 
   /*
    * simple text
    */
	register_block_pattern('evolutiondesuka-simple-text', [
		'title' => __('Simple Text', 'evolutiondesuka'),
      'description' => _x( 'Simple Text.', 'A title and text block.', 'evolutiondesuka' ),            
		'keywords' => ['text'],
		'categories' => ['evolutiondesuka-texts'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:group {"className":"evolutiondesuka-text evolutiondesuka-simple-text"} -->
            <div class="wp-block-group evolutiondesuka-text evolutiondesuka-simple-text"><!-- wp:heading {"level":2} -->
            <h2>Nulla mauris lacus</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?<br>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Texts...</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Texts...</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->'
	]);

   /*
    * evolutiondesuka-columns-text : future release
    
	register_block_pattern('evolutiondesuka-columns-text', [
		'title' => __('Columns Text', 'evolutiondesuka'),
      'description' => _x( 'Columns Text.', 'A title and text block supporting columns on wider screens.', 'evolutiondesuka' ),            
		'keywords' => ['text,columns'],
		'categories' => ['evolutiondesuka-texts'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:group {"className":"evolutiondesuka-text evolutiondesuka-columns-text"} -->
            <div class="wp-block-group evolutiondesuka-text evolutiondesuka-columns-text">
            <!-- wp:paragraph -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Texts...</p>
            <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->'
	]);
    */

   /*
    * evolutiondesuka-image
    */
    register_block_pattern('evolutiondesuka-image', [
		'title' => __('EvolutionDesuKa Image', 'evolutiondesuka'),
      'description' => _x( 'EvolutionDesuKa Image.', 'An image block with EvolutionDesuKa customization.', 'evolutiondesuka' ),            
		'keywords' => ['image'],
		'categories' => ['evolutiondesuka-images'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"evolutiondesuka-image"} -->
            <figure class="wp-block-image size-large evolutiondesuka-image">
            <img src="' . $site_uri .'/imgs/pattern-imgs/wood-3-lg.jpg" 
            alt="wood texture"/>
            </figure>
            <!-- /wp:image -->'
   ]);



   /*
    * evolutiondesuka-gallery
    */
    register_block_pattern('evolutiondesuka-gallery', [
		'title' => __('EvolutionDesuKa Gallery', 'evolutiondesuka'),
      'description' => _x( 'EvolutionDesuKa Gallery.', 'An image gallery block with EvolutionDesuKa customization.', 'evolutiondesuka' ),            
		'keywords' => ['gallery'],
		'categories' => ['evolutiondesuka-images'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:gallery {"linkTo":"none"} -->
            <figure class="wp-block-gallery evolutiondesuka-gallery columns-3 is-cropped">
            <ul class="blocks-gallery-grid">
            <li class="blocks-gallery-item">
            <figure>
            <img src="' . $site_uri .'/imgs/pattern-imgs/stone-2-md.jpg" alt="stone texture"/>
            </figure></li>
            <li class="blocks-gallery-item">
            <figure>
            <img src="' . $site_uri .'/imgs/pattern-imgs/red-brick-2-md.jpg" alt="red brick wall"/>
            </figure></li>
            <li class="blocks-gallery-item">
            <figure>
            <img src="' . $site_uri .'/imgs/pattern-imgs/stone-1-md.jpg" alt="stone texture"/>
            </figure></li>
            </ul>
            </figure>
            <!-- /wp:gallery -->'
   ]);

   /*
    * evolutiondesuka-cover-grid
    */
    register_block_pattern('evolutiondesuka-cover-grid', [
		'title' => __('Cover Grid', 'evolutiondesuka'),
      'description' => _x( 'Cover Grid.', 'A grid of interactive cover blocks.', 'evolutiondesuka' ),            
		'keywords' => ['cover,grid'],
		'categories' => ['evolutiondesuka-grids'],
		'viewportWidth' => 1000,
		'content' =>
            '<!-- wp:group {"className":"evolutiondesuka-cover-grid"} -->
            <div class="wp-block-group evolutiondesuka-cover-grid"><!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">EvolutionDesuKa Cover Grid</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Nam consequat maximus viverra. Quisque est ipsum, lobortis a arcu quis, aliquam maximus sapien. Maecenas facilisis eros in vulputate ullamcorper. Nulla bibendum sodales dolor, et placerat lorem lobortis id. Nulla ultricies, lorem sed facilisis ornare, orci nulla laoreet nunc, eget convallis risus tellus scelerisque eros.</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">read more link or button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover -->
            <!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">Highlights on mouse over</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis metus sed enim ullamcorper tincidunt.</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">maybe a button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover -->
            <!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">Title heading</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">You can customize the layout of this block pattern in Appearance - Customize - EvolutionDesuKa Block Patterns - EvolutionDesuKa Grids...</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">maybe a button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover -->
            <!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">Title heading</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">lorem ipsum here</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">maybe a button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover -->
            <!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">Title heading</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">lorem ipsum here</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">maybe a button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover -->
            <!-- wp:cover -->
            <div class="wp-block-cover has-background-dim"><div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">Title heading</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">lorem ipsum here</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">maybe a button</p>
            <!-- /wp:paragraph -->
            </div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->'
   ]);

   /*
    * evolutiondesuka-buttons
    */
    register_block_pattern('evolutiondesuka-buttons', [
		'title' => __('EvolutionDesuKa Buttons', 'evolutiondesuka'),
      'description' => _x( 'EvolutionDesuKa Buttons.', 'A EvolutionDesuKa button block.', 'evolutiondesuka' ),            
		'keywords' => ['button'],
		'categories' => ['evolutiondesuka-buttons'],
		'viewportWidth' => 1000,
		'content' =>  '<!-- wp:buttons  {"className":"evolutiondesuka-buttons"} -->
                     <div class="wp-block-buttons evolutiondesuka-buttons"><!-- wp:button -->
                     <div class="wp-block-button"><a class="wp-block-button__link">explore our projects</a></div>
                     <!-- /wp:button --></div>
                     <!-- /wp:buttons -->'
   ]);

}

add_action( 'init', 'evolutiondesuka_register_block_patterns' );

?>