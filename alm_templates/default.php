<div class="alm-item<?php if (!has_post_thumbnail()) { ?> no-img<?php } ?>">
    <?php global $post ?>
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
</div>
