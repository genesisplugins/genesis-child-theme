<?php

namespace GenesisPlugins\GenesisCustomizer;

// Load dependencies first.
if ( class_exists( 'WP_Dependency_Installer' ) ) {
	\WP_Dependency_Installer::instance()->run( __DIR__ );
}

// Load classes.
require_once get_stylesheet_directory() . '/vendor/richtabor/merlin-wp/class-merlin.php';
require_once get_stylesheet_directory() . '/vendor/tgmpa/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'after_setup_theme', __NAMESPACE__ . '\setup_merlin' );
/**
 * Description of expected behavior.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup_merlin() {
	$config  = apply_filters( 'genesis_customizer_merlin_config', require_once __DIR__ . '/config/merlin-config.php' );
	$strings = apply_filters( 'genesis_customizer_merlin_strings', require_once __DIR__ . '/config/merlin-strings.php' );

	new \Merlin( $config, $strings );
}

add_action( 'tgmpa_register', __NAMESPACE__ . '\setup_tgmpa' );
/**
 * Define recommended plugins.
 *
 * @since 3.0.0
 *
 * @return void
 */
function setup_tgmpa() {
	$plugins = apply_filters( 'genesis_customizer_tgmpa_plugins', [] );
	$config  = apply_filters( 'genesis_customizer_tgmpa_config', [] );

	\tgmpa( $plugins, $config );
}

add_action( 'admin_init', __NAMESPACE__ . '\add_theme_redirect' );
/**
 * Redirect on theme activation.
 *
 * @return void
 */
function add_theme_redirect() {
	global $pagenow;

	if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
		exit( wp_redirect( admin_url( 'admin.php?page=genesis-customizer-setup' ) ) );
	}
}
