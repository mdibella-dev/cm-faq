<?php
/**
 * Shortcode [faq].
 *
 * @author  Marco Di Bella
 * @package cm-theme-addon-faq
 */

namespace cm_theme_addon_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Creates an accordion element for the FAQ.
 *
 * @since 1.0.0
 *
 * @param array  $atts    The attributes (parameters) passed with the shortcode.
 *                        - faq The selected FAQ set.
 * @param string $content The content bracketed by the shortcode.
 *
 * @return string The rendered output.
 */

function shortcode_faq( $atts, $content = null ) {

    // Read out parameters
    $default_atts = [
        'faq' => '',
    ];
    extract( shortcode_atts( $default_atts, $atts ) );


    // Perform output
    if ( have_rows( 'faq', $faq ) ) {
        ob_start();
        ?>

        <div class="faq-accordion">
            <ul>
                <?php
                while ( have_rows( 'faq', $faq ) ) {
                    the_row();
                ?>
                <li class="faq-element">
                    <div class="faq-question">
                        <span class="faq-arrow"><i class="fal fa-long-arrow-right"></i></span>
                        <span><?php echo wp_strip_all_tags( apply_filters( 'the_content', get_sub_field( 'question' ) ) ); ?></span>
                    </div>

                    <div class="faq-answer">
                        <?php echo apply_filters( 'the_content', get_sub_field( 'answer' ) );?>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

        <?php
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

    return null;
}

add_shortcode( 'faq', __NAMESPACE__ . '\shortcode_faq' );
