<?php
/*
 * top navigation accessibility
 * @since EvolutionDesuKa 1.0
 * 
 */


/* 
 * add 'open menu' button to top-level menu items w/ sub-menus
 */
function evolutiondesuka_add_sub_menu_toggle( $output, $item, $depth, $args ) {

	if ( 0 === $depth && in_array( 'menu-item-has-children', $item->classes, true ) ) {

		// Add toggle button.
		$output .= '<button class="sub-menu-toggle screen-reader-text evolutiondesuka-drop-injected-toggle"  
                     data-evolutiondesuka-dropdown-toggle-submenu onClick="evolutiondesuka_toggle_sub_menu(this)">
                 ' . esc_html__('Open menu','evolutiondesuka') . '
                 </button>';
	}
	return $output;
}

add_filter( 'walker_nav_menu_start_el', 'evolutiondesuka_add_sub_menu_toggle', 10, 4 );


