<?php
/**
 * Functions and definitions
 *
 * @package Calmly
 */


define( 'CALMLY_VERSION', '1.0.0' );
define( 'CALMLY_DIR', rtrim( get_template_directory(), '/' ) );
define( 'CALMLY_URL', rtrim( get_template_directory_uri(), '/' ) );

 function calmly_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );
    
    // Make theme available for translation.
	load_theme_textdomain( 'calmly' );

	// Admin editor styles.
	add_theme_support( 'editor-styles' );

	// Switch default core markup for different forms to output valid HTML5.
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Enable block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style();
}

add_action( 'after_setup_theme', 'calmly_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function calmly_scripts() {
	wp_enqueue_style( 'calmly-style', get_stylesheet_uri(), array());
}

add_action( 'wp_enqueue_scripts', 'calmly_scripts' );

/**
 * Register block patterns category.
 *
 * @since 1.0.0
 */
function calmly_register_block_patterns_category() {
	register_block_pattern_category(
		'calmly',
		array(
			'label' => esc_html__( 'Calmly', 'calmly' ),
		)
	);
}

add_action( 'init', 'calmly_register_block_patterns_category', 9 );


/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function calmly_register_block_styles() {
	$block_styles = array(
		'core/list'      => array(
			'square' => esc_html__( 'Square', 'calmly' ),
			'none'   => esc_html__( 'None', 'calmly' ),
		)
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}

add_action( 'init', 'calmly_register_block_styles' );


// WooCommerce customizations.
if ( class_exists( 'WooCommerce', false ) ) {
	require_once CALMLY_DIR . '/inc/woocommerce.php';
}
