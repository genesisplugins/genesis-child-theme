<?php

namespace GenesisPlugins\GenesisCustomizer;

return [
	'base_path'            => \get_stylesheet_directory() . '/vendor/richtabor/',
	'base_url'             => \get_stylesheet_directory_uri() . '/vendor/richtabor/',
	'directory'            => 'merlin-wp',
	'merlin_url'           => 'genesis-customizer-setup',
	'parent_slug'          => 'genesis',
	'capability'           => 'manage_options',
	'child_action_btn_url' => 'https://codex.wordpress.org/child_themes',
	'dev_mode'             => true,
	'license_step'         => false,
	'license_required'     => false,
	'license_help_url'     => '',
	'edd_remote_api_url'   => '',
	'edd_item_name'        => '',
	'edd_theme_slug'       => '',
	'ready_big_button_url' => '',
];
