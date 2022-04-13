<?php
/**
 * The template for displaying all single newsletter articles.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Format a list of newsletter people.
 *
 * Examples of values returned:
 *
 * 1 author:
 * Jane Doe
 *
 * 2 authors:
 * Jane Doe and John Miller
 *
 * 3 authors:
 * Jane Doe, John Miller and Fearon Fallows
 *
 * @param $people
 * @return string
 */
function saao_newsletter_format_people($people) {
    $names = array();
    foreach ($people as $person) {
        $names[] = get_field("given-name", $person->ID) . " " . get_field("family-name", $person->ID);
    }

    if (count($names) < 3) {
        return join(" and ", $names);
    } else {
        return join(", ", array_slice($names, 0, count($names) - 1)) . " and " . $names[count($names) - 1];
    }
}

get_header(); ?>

<div class="newsletter-article normal-width">

    <div id="primary" <?php astra_primary_class(); ?>>

        <h1><?= get_the_title() ?></h1>

        <div class="article-authors"><?= saao_newsletter_format_people(get_field("article-authors", 104)) ?></div>

        <?php astra_entry_content_single(); ?>

        <div class="article-editors">Edited by <?= saao_newsletter_format_people(get_field("article-editors")) ?></div>

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
