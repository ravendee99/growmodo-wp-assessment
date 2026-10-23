<?php
/**
 * Theme setup and asset loading.
 *
 * @package Growmodo_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! isset( $content_width ) ) {
	$content_width = 1596;
}

/**
 * Register theme supports and navigation menus.
 */
function growmodo_custom_setup() {
	load_theme_textdomain( 'growmodo-custom', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'growmodo-custom' ),
			'footer'  => __( 'Footer menu', 'growmodo-custom' ),
		)
	);
}
add_action( 'after_setup_theme', 'growmodo_custom_setup' );

/**
 * Enqueue front-end styles and scripts.
 */
/**
 * Preconnect to the font host.
 *
 * @param array<int, string|array<string, string>> $urls
 * @param string                                   $relation_type
 * @return array<int, string|array<string, string>>
 */
function growmodo_custom_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'growmodo_custom_resource_hints', 10, 2 );

/**
 * Enqueue front-end styles and scripts.
 */
function growmodo_custom_enqueue_assets() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'growmodo-custom-fonts',
		'https://fonts.googleapis.com/css2?family=Urbanist:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'growmodo-custom-style',
		get_stylesheet_uri(),
		array( 'growmodo-custom-fonts' ),
		$version
	);

	wp_enqueue_script(
		'growmodo-custom-navigation',
		get_theme_file_uri( 'assets/js/navigation.js' ),
		array(),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'growmodo_custom_enqueue_assets' );

/**
 * Permalink for a published page, or a front-page anchor when that page does not exist.
 *
 * @param string $slug     Page slug.
 * @param string $fallback URL used when no published page matches.
 */
function growmodo_custom_destination( $slug, $fallback = '#' ) {
	$page = get_page_by_path( $slug );

	if ( $page instanceof WP_Post && 'publish' === $page->post_status ) {
		return get_permalink( $page );
	}

	return $fallback;
}

/**
 * Design navigation when no primary menu is assigned.
 */
function growmodo_custom_primary_menu_fallback() {
	$items = array(
		array(
			'label'   => __( 'Home', 'growmodo-custom' ),
			'url'     => home_url( '/' ),
			'current' => is_front_page(),
		),
		array(
			'label'   => __( 'About Us', 'growmodo-custom' ),
			'url'     => growmodo_custom_destination( 'about-us' ),
			'current' => is_page( 'about-us' ),
		),
		array(
			'label'   => __( 'Properties', 'growmodo-custom' ),
			'url'     => growmodo_custom_destination( 'properties', home_url( '/#featured-properties' ) ),
			'current' => is_page( 'properties' ),
		),
		array(
			'label'   => __( 'Services', 'growmodo-custom' ),
			'url'     => growmodo_custom_destination( 'services', home_url( '/#services' ) ),
			'current' => is_page( 'services' ),
		),
	);

	echo '<ul id="primary-menu" class="primary-menu menu">';

	foreach ( $items as $item ) {
		echo '<li class="menu-item' . ( $item['current'] ? ' current-menu-item' : '' ) . '">';
		echo '<a href="' . esc_url( $item['url'] ) . '"' . ( $item['current'] ? ' aria-current="page"' : '' ) . '>';
		echo esc_html( $item['label'] );
		echo '</a></li>';
	}

	echo '</ul>';
}

/**
 * Print a theme SVG icon.
 *
 * @param string               $name Icon file name without the extension.
 * @param array<string, mixed> $args Display arguments.
 */
function growmodo_custom_icon( $name, $args = array() ) {
	$args = wp_parse_args(
		$args,
		array(
			'alt'    => '',
			'class'  => 'icon',
			'width'  => 24,
			'height' => 24,
		)
	);

	printf(
		'<img class="%1$s" src="%2$s" alt="%3$s" width="%4$d" height="%5$d" decoding="async">',
		esc_attr( $args['class'] ),
		esc_url( get_theme_file_uri( 'assets/icons/' . $name . '.svg' ) ),
		esc_attr( $args['alt'] ),
		(int) $args['width'],
		(int) $args['height']
	);
}

/**
 * Print a theme image.
 *
 * @param string               $relative Path relative to the theme directory.
 * @param string               $alt      Accessible description. Empty for decorative images.
 * @param int                  $width    Intrinsic width.
 * @param int                  $height   Intrinsic height.
 * @param array<string, mixed> $args     Optional class, loading, and fetchpriority.
 */
function growmodo_custom_image( $relative, $alt, $width, $height, $args = array() ) {
	$args = wp_parse_args(
		$args,
		array(
			'class'         => '',
			'loading'       => 'lazy',
			'fetchpriority' => '',
		)
	);

	$priority = $args['fetchpriority'] ? ' fetchpriority="' . esc_attr( $args['fetchpriority'] ) . '"' : '';

	printf(
		'<img class="%1$s" src="%2$s" alt="%3$s" width="%4$d" height="%5$d" loading="%6$s" decoding="async"%7$s>',
		esc_attr( $args['class'] ),
		esc_url( get_theme_file_uri( $relative ) ),
		esc_attr( $alt ),
		(int) $width,
		(int) $height,
		esc_attr( $args['loading'] ),
		$priority // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above.
	);
}
