<?php
/**
 * Plugin Name: WPMB Plugin Post Type
 * Plugin URI: https://joshrobbs.com
 * Description: Adds a post type for plugins.
 * Version: 0.1.0
 * Author: Josh Robbs
 * Author Email: josh@joshrobbs.com
 * Author URI: https://joshrobbs.com
 * License: The Unlicense
 * License URI: https://unlicense.org
 * Text Domain: wpmb-plugin-post-type
 * Domain Path: /languages
 *
 * @package WPMB_ACF_MANAGER
 */

use WPMB_ACF_MANAGER_Common\Hooks;

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/common/constants.php';

Hooks::init();
