<?php
/**
 * inc/nav-menus.php — navigation menu registration
 * (Registration is handled in functions.php via register_nav_menus.)
 * This file adds any Walker customization or menu helper functions.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Custom Walker — adds "Coming Soon" badge to menu items
 * that have a CSS class of "coming-soon" in Appearance > Menus.
 */
class DDLW_Walker_Nav extends Walker_Nav_Menu {

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes    = empty( $item->classes ) ? [] : (array) $item->classes;
		$is_soon    = in_array( 'coming-soon', $classes, true );
		$item_class = $is_soon ? ' is-coming-soon' : '';

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		// atts
		$atts           = [];
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( $value !== '' ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$args         = is_object( $args ) ? $args : (object) [];
		$item_output  = isset( $args->before ) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . apply_filters( 'the_title', $item->title, $item->ID ) . ( isset( $args->link_after ) ? $args->link_after : '' );

		if ( $is_soon ) {
			$item_output .= ' <span class="badge-soon">Soon</span>';
		}

		$item_output .= '</a>';
		$item_output .= isset( $args->after ) ? $args->after : '';

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
