<?php
/**
 * Business facts as Customizer settings — one place to edit the phone
 * number, email, and license/cert numbers instead of hunting through every
 * template. Defaults match business-info.md in the main repo.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddlw_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'ddlw_business', array(
		'title'    => __( 'D&D Land Works — Business Info', 'dd-landworks' ),
		'priority' => 30,
	) );

	$fields = array(
		'ddlw_phone'       => '541-401-8726',
		'ddlw_email'       => 'david@ddlandworks.com',
		'ddlw_ccb_number'  => '261742',
		'ddlw_deq_cert'    => 'DEQ Certified (Septic)',
		'ddlw_service_area' => 'Lane County, OR',
	);

	foreach ( $fields as $id => $default ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'section' => 'ddlw_business',
			'label'   => ucwords( str_replace( array( 'ddlw_', '_' ), array( '', ' ' ), $id ) ),
		) );
	}
}
add_action( 'customize_register', 'ddlw_customize_register' );

function ddlw_phone() {
	return get_theme_mod( 'ddlw_phone', '541-401-8726' );
}

function ddlw_phone_href() {
	return 'tel:' . preg_replace( '/[^0-9]/', '', ddlw_phone() );
}

function ddlw_email() {
	return get_theme_mod( 'ddlw_email', 'david@ddlandworks.com' );
}

function ddlw_ccb_number() {
	return get_theme_mod( 'ddlw_ccb_number', '261742' );
}

function ddlw_deq_cert() {
	return get_theme_mod( 'ddlw_deq_cert', 'DEQ Certified (Septic)' );
}

function ddlw_service_area() {
	return get_theme_mod( 'ddlw_service_area', 'Lane County, OR' );
}
