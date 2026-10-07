<?php
/**
 * Kapetan theme setup.
 *
 * @package Kapetan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

/**
 * Theme support + menus.
 */
function kapetan_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kapetan' ),
			'footer'  => __( 'Footer Menu', 'kapetan' ),
		)
	);
}
add_action( 'after_setup_theme', 'kapetan_setup' );

/**
 * "Case Study" custom post type.
 * Each entry automatically uses single-case_study.php — no manual
 * Page Template assignment needed (that's how it worked before).
 */
function kapetan_register_case_study_cpt() {
	register_post_type(
		'case_study',
		array(
			'labels'       => array(
				'name'               => __( 'Case Studies', 'kapetan' ),
				'singular_name'      => __( 'Case Study', 'kapetan' ),
				'add_new'            => __( 'Add New', 'kapetan' ),
				'add_new_item'       => __( 'Add New Case Study', 'kapetan' ),
				'edit_item'          => __( 'Edit Case Study', 'kapetan' ),
				'new_item'           => __( 'New Case Study', 'kapetan' ),
				'view_item'          => __( 'View Case Study', 'kapetan' ),
				'search_items'       => __( 'Search Case Studies', 'kapetan' ),
				'not_found'          => __( 'No case studies found', 'kapetan' ),
				'not_found_in_trash' => __( 'No case studies found in Trash', 'kapetan' ),
				'all_items'          => __( 'Case Studies', 'kapetan' ),
				'menu_name'          => __( 'Case Studies', 'kapetan' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-analytics',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'rewrite'      => array( 'slug' => 'case-studies' ),
		)
	);
}
add_action( 'init', 'kapetan_register_case_study_cpt' );

/**
 * Flush permalinks once when the theme is activated, so the new CPT's
 * URLs work immediately. If this code lands on an already-active theme
 * (no re-activation), visit Settings -> Permalinks -> Save once instead.
 */
function kapetan_flush_rewrites_on_switch() {
	kapetan_register_case_study_cpt();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'kapetan_flush_rewrites_on_switch' );

/**
 * Styles + scripts.
 *
 * style.css already contains the compiled, production CSS (Tailwind
 * output + the brand type scale / animation rules), so it's enqueued
 * directly rather than re-processed.
 */
function kapetan_scripts() {
	wp_enqueue_style( 'kapetan-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script(
		'kapetan-common',
		get_template_directory_uri() . '/assets/js/common.js',
		array(),
		'1.0.0',
		true
	);

	// Audience toggle / services tabs / testimonial carousel only exist on the homepage.
	if ( is_front_page() ) {
		wp_enqueue_script(
			'kapetan-front-page',
			get_template_directory_uri() . '/assets/js/front-page.js',
			array( 'kapetan-common' ),
			'1.0.0',
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'kapetan_scripts' );

/**
 * Resolve the URL of a specific "Case Study" CPT entry by its slug
 * (post_name), so each homepage Results card can link to its own real
 * case study without a hardcoded post ID. Falls back to '#' if that
 * slug isn't published yet.
 */
function kapetan_case_study_url_by_slug( $slug ) {
	static $cache = array();

	if ( isset( $cache[ $slug ] ) ) {
		return $cache[ $slug ];
	}

	$posts = get_posts(
		array(
			'post_type'      => 'case_study',
			'post_status'    => 'publish',
			'name'           => $slug,
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);

	$cache[ $slug ] = ! empty( $posts ) ? get_permalink( $posts[0] ) : '#';

	return $cache[ $slug ];
}

/**
 * Resolve the URL of the most recent published "Case Study" CPT entry.
 * Kept as a general fallback; the homepage's Results cards use
 * kapetan_case_study_url_by_slug() instead so each links to its own entry.
 */
function kapetan_case_study_url() {
	static $url = null;

	if ( null === $url ) {
		$posts = get_posts(
			array(
				'post_type'      => 'case_study',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'fields'         => 'ids',
			)
		);

		$url = ! empty( $posts ) ? get_permalink( $posts[0] ) : '#';
	}

	return $url;
}
