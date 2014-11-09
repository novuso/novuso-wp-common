<?php if (!defined('ABSPATH')) exit('direct script access is not allowed');
/**
 * This file is part of Novuso WPCommon
 *
 * @author    John Nickell
 * @copyright Copyright (c) 2014, Novuso. (http://novuso.com/)
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 */

if (!function_exists('novuso_wp_common_register_scripts')):
/**
 * Registers common JavaScript libraries
 */
function novuso_wp_common_register_scripts() {
    $vers = [
        'backstretch'          => '2.0.4',
        'bootstrap'            => '3.3.0',
        'datatables'           => '1.10.4',
        'datatables-bootstrap' => '1.10.4',
        'jquery-spin'          => '2.0.1',
        'marionette'           => '2.2.2',
        'markdown'             => '0.5.0',
        'modernizr'            => '2.8.3',
        'moment'               => '2.8.3',
        'moment-intl'          => '2.8.3',
        'respond'              => '1.4.2',
        'spin'                 => '2.0.1',
        'swipebox'             => '1.3.0.2',
        'videojs'              => '4.10.2'
    ];

    $debug = (defined('WP_DEBUG') && WP_DEBUG) ? true : false;
    $basePath = trailingslashit(NOVUSO_WP_COMMON_URL).'assets/js/';

    // Backstretch
    $handle = 'backstretch';
    $source = $basePath.'jquery.backstretch-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Bootstrap
    $handle = 'bootstrap';
    $source = $basePath.'bootstrap-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // DataTables
    $handle = 'datatables';
    $source = $basePath.'jquery.dataTables-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // DataTables Bootstrap
    $handle = 'datatables-bootstrap';
    $source = $basePath.'dataTables.bootstrap-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery', 'datatables', 'bootstrap'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // jQuery Spin
    $handle = 'jquery-spin';
    $source = $basePath.'jquery.spin-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery', 'spin'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Marionette
    $handle = 'marionette';
    $source = $basePath.'backbone.marionette-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery', 'underscore', 'backbone', 'json2'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Markdown
    $handle = 'markdown';
    $source = $basePath.'markdown-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Modernizr
    $handle = 'modernizr';
    $source = $basePath.'modernizr-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = false;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Moment
    $handle = 'moment';
    $source = $basePath.'moment-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Moment with locales
    $handle = 'moment-intl';
    $source = $basePath.'moment-intl-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Respond
    $handle = 'respond';
    $source = $basePath.'respond-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = false;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Spin
    $handle = 'spin';
    $source = $basePath.'spin-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = [];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // Swipebox
    $handle = 'swipebox';
    $source = $basePath.'swipebox-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['jquery'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);

    // VideoJS
    $handle = 'videojs';
    $source = $basePath.'videojs-'.$vers[$handle].($debug ? '' : '.min').'.js';
    $deps = ['modernizr'];
    $footer = true;
    wp_register_script($handle, $source, $deps, null, $footer);
}
endif;

if (!function_exists('novuso_wp_common_register_styles')):
/**
 * Registers common CSS dependencies
 */
function novuso_wp_common_register_styles() {
    $vers = [
        'bootstrap-css'            => '3.3.0',
        'bootstrap-theme-css'      => '3.3.0',
        'datatables-bootstrap-css' => '1.10.4',
        'font-awesome-css'         => '4.2.0',
        'swipebox-css'             => '1.3.0.2',
        'videojs-css'              => '4.10.2'
    ];

    $debug = (defined('WP_DEBUG') && WP_DEBUG) ? true : false;
    $basePath = trailingslashit(NOVUSO_WP_COMMON_URL).'assets/css/';

    // Bootstrap CSS
    $handle = 'bootstrap-css';
    $source = $basePath.'bootstrap-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = [];
    wp_register_style($handle, $source, $deps, null);

    // Bootstrap Theme CSS
    $handle = 'bootstrap-theme-css';
    $source = $basePath.'bootstrap-theme-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = ['bootstrap-css'];
    wp_register_style($handle, $source, $deps, null);

    // DataTables Bootstrap CSS
    $handle = 'datatables-bootstrap-css';
    $source = $basePath.'dataTables.bootstrap-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = ['bootstrap-css'];
    wp_register_style($handle, $source, $deps, null);

    // Font Awesome
    $handle = 'font-awesome-css';
    $source = $basePath.'font-awesome-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = [];
    wp_register_style($handle, $source, $deps, null);

    // Swipebox
    $handle = 'swipebox-css';
    $source = $basePath.'swipebox-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = [];
    wp_register_style($handle, $source, $deps, null);

    // VideoJS
    $handle = 'videojs-css';
    $source = $basePath.'videojs-'.$vers[$handle].($debug ? '' : '.min').'.css';
    $deps = [];
    wp_register_style($handle, $source, $deps, null);
}
endif;