<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}

if ( ! function_exists( 'shopeo_theme_setup' ) ) {
	function shopeo_theme_setup() {
		//theme support

		//load languages
		load_theme_textdomain( 'shopeo-theme-scaffold', get_template_directory() . '/languages' );
	}
}

add_action( 'after_setup_theme', 'shopeo_theme_setup' );

if ( ! function_exists( 'shopeo_theme_enqueue_scripts' ) ) {
	function shopeo_theme_enqueue_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );
		//style
		wp_enqueue_style( 'shopeo-theme-scaffold-style', get_template_directory_uri() . '/style.css', array(), $theme_version );
		wp_style_add_data( 'shopeo-theme-scaffold-style', 'rtl', 'replace' );
		//scripts
		wp_enqueue_script( 'shopeo-theme-scaffold-script', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), $theme_version );
		wp_script_add_data( 'shopeo-theme-scaffold-script', 'async', true );
	}
}

add_action( 'wp_enqueue_scripts', 'shopeo_theme_enqueue_scripts', 18 );
