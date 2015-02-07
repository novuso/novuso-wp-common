<?php if (!defined('ABSPATH')) exit('direct script access is not allowed');
/**
 * Plugin Name: Novuso WPCommon
 * Author: The Novuso development team
 * Author URI: http://novuso.com
 * Description: Common libraries for Novuso WordPress development
 * Version: 0.2.1
 * License: MIT
 *
 * @author    John Nickell
 * @copyright Copyright (c) 2015, Novuso. (http://novuso.com/)
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 */

// activation
register_activation_hook(__FILE__, function () {
    if (version_compare(get_bloginfo('version'), '3.8', '<')) {
        deactivate_plugins(basename(__FILE__));
    }
});

// functions
require_once trailingslashit(plugin_dir_path(__FILE__)).'functions/enqueue.php';

// bootstrap plugin
add_action('plugins_loaded', function () {
    define('NOVUSO_WP_COMMON_DIR', rtrim(plugin_dir_path(__FILE__), '/'));
    define('NOVUSO_WP_COMMON_URL', rtrim(plugins_url('', __FILE__), '/'));
    // register libraries for front-end of site
    add_action('wp_enqueue_scripts', 'novuso_wp_common_register_scripts', 1);
    add_action('wp_enqueue_scripts', 'novuso_wp_common_register_styles', 1);
    add_action('admin_enqueue_scripts', 'novuso_wp_common_register_scripts', 1);
    add_action('admin_enqueue_scripts', 'novuso_wp_common_register_styles', 1);
    add_action('login_enqueue_scripts', 'novuso_wp_common_register_scripts', 1);
    add_action('login_enqueue_scripts', 'novuso_wp_common_register_styles', 1);
});
