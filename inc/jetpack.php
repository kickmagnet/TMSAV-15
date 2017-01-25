<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package TMSAV-15
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function texas_media_systems_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'texas_media_systems_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function texas_media_systems_theme_jetpack_setup
add_action( 'after_setup_theme', 'texas_media_systems_theme_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function texas_media_systems_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function texas_media_systems_theme_infinite_scroll_render
