<?php
/*
 * Plugin Name: Simple Gutenberg Accordion
 * Author: Benjamin Heller
 * Author URI: http://benjaminheller.net
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function gutenberg_boilerplate_block() {
	wp_register_script(
		'gutenberg-simple-accordion',
		plugins_url( 'block/block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element' )
	);

	register_block_type( 'custom-blocks/gutenberg-simple-accordion', array(
		'editor_script' => 'gutenberg-simple-accordion',
	) );
}
add_action( 'init', 'gutenberg_boilerplate_block' );


