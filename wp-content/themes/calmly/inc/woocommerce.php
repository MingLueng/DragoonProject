<?php
/**
 * WooCommerce customization
 *
 * @package Calmly
 */

/**
 * WooCommerce setup function.
 *
 * @since 1.0.0
 *
 * @return void
 */
function calmly_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width'         => 540,
			'gallery_thumbnail_image_width' => 150,
		)
	);
}

add_action( 'after_setup_theme', 'calmly_woocommerce_setup' );

/**
 * Enqueue WooCommerce scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function calmly_woocommerce_scripts() {
	wp_enqueue_style( 'calmly-woocommerce', get_template_directory_uri() . '/woocommerce.css', array(), CALMLY_VERSION );
	wp_style_add_data( 'calmly-woocommerce', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'calmly_woocommerce_scripts' );

/**
 * Change number of products per row.
 *
 * @since 1.0.0
 *
 * @return int Number of columns.
 */
function calmly_product_columns() {
	return 3;
}

add_filter( 'loop_shop_columns', 'calmly_product_columns' );

/**
 * Change number of related products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function calmly_related_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'calmly_related_products_args' );

/**
 * Change number of upsell products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function calmly_upsell_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_upsell_display_args', 'calmly_upsell_products_args' );


