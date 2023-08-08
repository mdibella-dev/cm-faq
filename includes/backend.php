<?php
/**
 * Functions to handle the backend.
 *
 * @author  Marco Di Bella
 * @package cm-theme-addon-faq
 */

namespace cm_theme_addon_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Load the backend scripts and styles.
 *
 * @since 1.0.0
 */

function admin_enqueue_scripts() {
    // Do something!
}

add_action( 'admin_enqueue_scripts',__NAMESPACE__ . '\admin_enqueue_scripts' );
