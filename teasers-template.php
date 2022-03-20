<?php /* Template Name: Home */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <main id="main" class="site-main">
        <article class="post-9 page type-page status-publish ast-article-single" id="post-9" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
            <header class="entry-header ast-no-thumbnail ast-no-meta">

                <h1 class="entry-title" itemprop="headline">Home</h1>	</header><!-- .entry-header -->

            <div class="entry-content clear" itemprop="text">



                <div class="wp-block-cover alignfull">
                    <span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span>
                    <img width="2038" height="515" class="wp-block-cover__image-background wp-image-13" alt="" src="https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167.jpg" data-object-fit="cover" srcset="https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167.jpg 2038w, https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167-300x76.jpg 300w, https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167-1024x259.jpg 1024w, https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167-768x194.jpg 768w, https://newsletters.saao.ac.za/wp-content/uploads/2022/02/SAAO-Photoshoot-Small_167-1536x388.jpg 1536w" sizes="(max-width: 2038px) 100vw, 2038px">
                    <div class="wp-block-cover__inner-container">
                        <p class="has-text-align-center has-ast-global-color-5-color has-text-color has-x-large-font-size"><strong>Masithethe ngenkwenkwezi</strong><br><em>Let’s talk about stars</em></p>
                    </div>
                </div>

                    <?php
    $posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'newsletter',
    ));

    if($posts)
    {

        foreach($posts as $post)
        {
            ?>
            <?php
            $articles = get_field("articles", $post->ID);
            ?>
                <div class="issue-container">
                    <h2>Issue <?= get_field("issue-number", $post) ?></h2>
                    <div class="issue-content<?= count($articles) % 2 ? ' odd' : '' ?>">
                        <?php
                        foreach ($articles as $index => $article) {
                            ?>
                            <article class="article">
                                <div class="teaser-image">
                                    <a href="<?= get_permalink($article) ?>">
                                        <?= get_the_post_thumbnail($article, "teaser-image-size") ?>
                                    </a>
                                </div>
                                <div class="teaser-text">
                                    <div>
                                        <h3><?= get_the_title($article) ?></h3>
                                        <?= get_field("teaser",$article->ID) ?>
                                    </div>
                                    <p class="read-more">
                                        <a href="<?= get_permalink($article) ?>">
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </article>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
        }
    }
                    ?>
            </div><!-- .entry-content .clear -->
        </article><!-- #post-## -->
    </main>

</div><!-- #primary -->

<?php get_footer(); ?>

