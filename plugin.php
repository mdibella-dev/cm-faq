<?php
/**
 * Plugin Name:         CM &mdash; FAQ (addon to CM theme)
 * Plugin URI:          https://github.com/mdibella-dev/cm-theme-addon-faq
 * Description:         This plugin provides a custom post type for managing and a shortcode for displaying so-called FAQs.
 * Author:              Marco Di Bella
 * Author URI:          https://www.marcodibella.de
 * License:             MIT License
 * Requires at least:   6
 * Tested up to:        6.2
 * Requires PHP:        7
 * Version:             1.0.0
 * Text Domain:         cm-faq
 * Domain Path:         /languages
 *
 * @author  Marco Di Bella
 * @package cm-theme-addon-faq
 */

namespace cm_theme_addon_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Variables and definitions */

define( __NAMESPACE__ . '\PLUGIN_VERSION', '1.0.0' );
define( __NAMESPACE__ . '\PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( __NAMESPACE__ . '\PLUGIN_URL', plugin_dir_url( __FILE__ ) );



/** Include files */

require_once( PLUGIN_DIR . 'includes/setup.php' );
require_once( PLUGIN_DIR . 'includes/backend.php' );

require_once( PLUGIN_DIR . 'includes/shortcodes/shortcode-faq.php' );
