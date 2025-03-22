<?php
/**
 * Hook initialization for plugin.
 *
 * @package WPMB_ACF_MANAGER
 */

namespace WPMB_ACF_MANAGER_Common;

use WPMB_ACF_MANAGER\ACFJSONManager;

defined( 'ABSPATH' ) || exit;

/**
 * Class Hooks
 */
class Hooks {

	/**
	 * Init.
	 */
	public static function init() {
		ACFJSONManager::init();
	}
}
