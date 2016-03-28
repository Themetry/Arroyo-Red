<?php
/**
 * Arroyo Red functions
 *
 * @package Arroyo Red
 */

/**
 * Enqueue styles.
 */
function arroyo_red_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'arroyo_red_enqueue_styles' );
