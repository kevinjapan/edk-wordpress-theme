<?php
/*
 * EvolutionDesuKa Header Utility
 * 
 * @since EvolutionDesuKa 1.0
 */

       
/*
 * we adapt WP's get_header_image_tag() to remove width and height setting
 * required width/height & sizes in orig func prevent our desired scaling for mobile
 */

function evolutiondesuka_frontpage_header_tag($attr = array()) {

   $header = get_custom_header();
   $header->url = get_header_image();

   if ( ! $header->url ) return '';

   $width  = absint($header->width);
   $height = absint($header->height);

   $attr = wp_parse_args(
      $attr,
      array(
         'src'    => $header->url,
         //'width'  => $width,
         //'height' => $height,
         'alt'    => get_bloginfo('name'),
      )
   );

   // Generate 'srcset' and 'sizes'
   if (empty($attr['srcset']) && ! empty($header->attachment_id)) {
      $image_meta = get_post_meta( $header->attachment_id, '_wp_attachment_metadata', true );
      $size_array = array($width, $height);

      if (is_array($image_meta)) {
         $srcset = wp_calculate_image_srcset($size_array, $header->url, $image_meta, $header->attachment_id);
         if ( $srcset) {
               $attr['srcset'] = $srcset;
               //$attr['sizes']  = $sizes;
         }
      }
   }
   $attr = array_map('esc_attr', $attr);
   $html = '<img';
   foreach ($attr as $name => $value) {
      $html .= ' ' . $name . '="' . $value . '"';
   }
   $html .= ' />';

   return apply_filters('evolutiondesuka_frontpage_header_tag', $html, $header, $attr);
}

function evolutiondesuka_build_header_img_tag($image_id) {

   $img_src = wp_get_attachment_image_url( $image_id, 'large' );
   $img_srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
   $img_sizes = wp_get_attachment_image_sizes( $image_id, 'full' );
   $img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ); 
   return '<img src="' . esc_attr( $img_src ) . '" srcset="' . esc_attr( $img_srcset ) . '"  alt="' . $img_alt . '">';

}


function evolutiondesuka_header_img_tag() {

   global $post;
   if (is_category('blog')) {
      if(get_theme_mod('blog_header_img') !== null && get_theme_mod('blog_header_img') !== "") {
         $image_id = attachment_url_to_postid(get_theme_mod('blog_header_img'));
         return evolutiondesuka_build_header_img_tag($image_id);
      }
   }
   if(get_the_post_thumbnail()) {
      $image_id = get_post_thumbnail_id($post->ID);
      return evolutiondesuka_build_header_img_tag($image_id);    
   }
   return evolutiondesuka_frontpage_header_tag();
}

