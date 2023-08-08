<?php
/**
 * Custom post type: faq.
 *
 * @author  Marco Di Bella
 * @package cm-theme-addon-faq
 */

namespace cm_theme_addon_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers the custom post type.
 *
 * @since 1.0.0
 */

function post_type_faq__register() {
    
    $labels = [
        'name'          => __( 'FAQ', 'cm-faq' ),
        'singular_name' => __( 'FAQ', 'cm-faq' ),
        'all_items'     => __( 'FAQ', 'cm-faq' ),
    ];

    $args = [
        'label'                 => __( 'FAQ', 'cm-faq' ),
        'labels'                => $labels,
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'rest_base'             => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'rest_namespace'        => 'wp/v2',
        'has_archive'           => false,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'delete_with_user'      => false,
        'exclude_from_search'   => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'hierarchical'          => false,
        'can_export'            => true,
        'rewrite'               => [
            'slug'       => 'faq',
            'with_front' => true
        ],
        'query_var'             => true,
        'menu_icon'             => 'dashicons-format-status',
        'supports'              => [
            'title'
        ],
        'show_in_graphql'       => false,
    ];

    register_post_type( 'faq', $args );
}

add_action( 'init', __NAMESPACE__ . '\post_type_faq__register' );
