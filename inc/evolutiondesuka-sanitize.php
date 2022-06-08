<?php
/*
 * sanitize funcs
 * @since EvolutionDesuKa 1.0
 */

if ( ! function_exists( 'evolutiondesuka_sanitize_number_range' ) ) :

	/*
	 * Sanitize number range.
	 */
	function evolutiondesuka_sanitize_number_range( $input, $setting ) {

      // ctrl permits user to enter any number - inc negatives (eg for img shifts) 
      // so we tie to min/max & capture user's intent
		// $input = absint($input);
      
		// get permitted min / max 
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $input );
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $input );

		// return if valid - otherwise return closest in permitted range
      if($input > $max) $input = $max;
      if($input < $min) $input = $min;
		return ( $min <= $input && $input <= $max  ? $input : $setting->default );
	}

endif;




