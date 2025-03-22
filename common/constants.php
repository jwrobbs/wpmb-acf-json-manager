<?php
/**
 * Plugin constants.
 *
 * - Path
 * - URL
 *
 * @package WPMB_ACF_MANAGER;
 */

defined( 'ABSPATH' ) || exit;

// Plugin path.
if ( ! defined( 'WPMB_ACF_MANAGER_PATH' ) ) {
	define( 'WPMB_ACF_MANAGER_PATH', plugin_dir_path( __FILE__ ) );
}

// Plugin URL.
if ( ! defined( 'WPMB_ACF_MANAGER_URL' ) ) {
	define( 'WPMB_ACF_MANAGER_URL', plugin_dir_url( __FILE__ ) );
}
