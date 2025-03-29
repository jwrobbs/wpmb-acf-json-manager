<?php
/**
 * Plugin Name: WPMB ACF JSON Manager
 * Plugin URI: https://joshrobbs.com
 * Description: Simple plugin to have ACF save data as JSON.
 * Version: 1.0.0
 * Author: Josh Robbs
 * Author URI: https://joshrobbs.com
 * License: The Unlicense
 * License URI: https://unlicense.org
 * Text Domain: wpmb-acf-json-manager
 * Domain Path: /languages
 *
 * @package WPMB_ACF_MANAGER
 */

use WPMB_ACF_MANAGER_Common\Hooks;

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/common/constants.php';

Hooks::init();
