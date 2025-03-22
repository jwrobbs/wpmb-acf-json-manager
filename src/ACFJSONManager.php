<?php
/**
 * ACF JSON Manager
 *
 * @package WPMB_ACF_MANAGER
 */

namespace WPMB_ACF_MANAGER;

defined( 'ABSPATH' ) || exit;

/**
 * Class ACFJSONManager
 */
class ACFJSONManager {

	/**
	 * Init.
	 */
	public static function init() {
		add_filter( 'acf/settings/save_json', array( static::class, 'save_json_path' ) );
		add_filter( 'acf/settings/load_json', array( static::class, 'load_json_path' ) );
		add_action( 'acf/update_field_group', array( static::class, 'create_json_folder_if_needed' ) );
	}

	/**
	 * Get the JSON path.
	 *
	 * @return string
	 */
	public static function get_json_path() {
		$upload_dir = wp_upload_dir();
		return trailingslashit( $upload_dir['basedir'] ) . 'wpmb-acf-json';
	}

	/**
	 * Save JSON path.
	 *
	 * @param string $path Path.
	 * @return string
	 */
	public static function save_json_path( $path ) {
		$path;
		return static::get_json_path();
	}

	/**
	 * Load JSON path.
	 *
	 * @param array $paths Paths.
	 * @return array
	 */
	public static function load_json_path( $paths ) {
		$paths[] = static::get_json_path();
		return $paths;
	}

	/**
	 * Create JSON folder if needed.
	 *
	 * @param string $group Group.
	 */
	public static function create_json_folder_if_needed( $group ) {
		$group;
		$path = static::get_json_path();
		if ( ! file_exists( $path ) ) {
			wp_mkdir_p( $path );
		}
	}
}
