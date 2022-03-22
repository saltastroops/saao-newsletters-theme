<?php
/**
 * The template for displaying all single newsletter articles.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="newsletter-article normal-width">

    <div id="primary" <?php astra_primary_class(); ?>>

        <h1><?= get_the_title() ?></h1>

        <?php astra_entry_content_single(); ?>

        <?php astra_entry_bottom(); ?>

        <div class="mailblaze-container">
            <div class="mailblaze">
                <h2>Subscribe to the SAAO newsletter mailing list</h2>
                <?php echo do_shortcode('[mb4wp_form id="117"]') ?>
            </div>
        </div>

    </div><!-- #primary -->

    <?php astra_entry_after(); ?>

</div>

<?php get_footer(); ?>
