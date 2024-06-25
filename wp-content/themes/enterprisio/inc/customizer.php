<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage enterprisio
 * @since enterprisio 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function enterprisio_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Enterprisio_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Enterprisio Pro', 'enterprisio' ),
		'button_text'      => __( 'Upgrade Pro', 'enterprisio' ),
		'url'              => esc_url( ENTERPRISIO_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'enterprisio_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function enterprisio_custom_control_scripts() {
	wp_enqueue_script( 'enterprisio-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'enterprisio_custom_control_scripts' );