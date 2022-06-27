<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE Tester
 * @since 0.0.0
 */

/**
 * Theme setup function.
 * 
 * Since Gutenberg 11.8, the following theme support is automatically 
 * enabled for block themes: post-thumbnails, editor-styles, responsive-embeds,
 * automatic-feed-links, html5 styles, and html5 scripts.
 * 
 * Don't add theme support for `title-tag`, full site editing adds
 * the title tags by default.
 * 
 * There is no need to register widget areas, menus, add support for
 * a custom logo, custom header, or colors.
 * 
 * Custom image sizes and set the post thumbnail size can be defined here.
 * 
 * Support for wide and full-width blocks, color palettes, gradients,
 * and font sizes are added via the theme.json file.
 * 
 * Default structural styles for the frontend and editor are included
 * by default. `wp-block-styles` opts-in to slightly more 'opinionated'
 * styles for the front end.
 * 
 * @see https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
 * @since 0.0.0
 */
add_action( 'after_setup_theme', 'fsetester_setup' );

if ( ! function_exists( 'fsetester_setup' ) ) {
	function fsetester_setup() {
    add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
  }
}

/**
 * Enqueue the style.css file.
 * 
 * The WP comments styles are not enqueued, because they are they are
 * enqueued automatically since Gutenberg V 10
 * 
 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @since 0.0.0
 */
add_action( 'wp_enqueue_scripts', 'fsetester_styles' );

function fsetester_styles() {
	wp_enqueue_style(
		'fsetester-style',
		get_stylesheet_uri(),
		wp_get_theme()->get( 'Version' )
	);
}

/**
 * Add a new block style for the core/paragraph block via index.js
 */
add_action( 'enqueue_block_editor_assets', 'fsetester_enqueue_js' );

function fsetester_enqueue_js(){
	wp_enqueue_script(
		'fsetester_block_styles',
		get_template_directory_uri() . '/js/index.js',
		array( 'wp-blocks', 'wp-edit-post' )
	);
}

register_block_style(
	'core/paragraph',
	array(
		'name'         => 'blue',
		'label'        => __( 'Blue' ),
		'inline_style' => '.is-style-blue { color: blue; }'
	)
);