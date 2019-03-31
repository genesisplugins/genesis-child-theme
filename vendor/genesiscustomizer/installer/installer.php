<?php

namespace GenesisCustomizer;

// Install and active dependencies.
\WP_Dependency_Installer::instance()->run( __DIR__ );

add_action( 'admin_init', __NAMESPACE__ . '\merlin_redirect' );
/**
 * Redirect on theme activation.
 *
 * @return void
 */
function merlin_redirect() {
	global $pagenow;

	if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
		exit( wp_redirect( admin_url( 'admin.php?page=genesis-customizer-setup' ) ) );
	}
}
