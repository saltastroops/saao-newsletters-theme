<?php
/**
 * The template for displaying all single newsletter articles.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="newsletter-article">

    <div id="primary" <?php astra_primary_class(); ?>>

        <h1><?= get_the_title() ?></h1>

        <?php astra_entry_content_single(); ?>

        <?php astra_entry_bottom(); ?>

    </div><!-- #primary -->

    <?php astra_entry_after(); ?>

</div>

<?php get_footer(); ?>
