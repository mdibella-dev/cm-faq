<?php
/**
 * Functions to handle the backend.
 *
 * @author  Marco Di Bella
 * @package cm-faq
 */

namespace cm_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Load the backend scripts and styles.
 *
 * @since 1.0.0
 */

function admin_enqueue_scripts()
{
    // Do something!
}

add_action( 'admin_enqueue_scripts','cm_faq\admin_enqueue_scripts' );
