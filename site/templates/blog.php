<?php snippet('header') ?>
<section class="container blog">

    <div class="row">
        <div class="span2">
            <?php snippet('sidebarcontent') ?>
        </div>
        <div class="span5">

            <?php $articles = $page->children()->visible()->flip()->paginate(42) ?>
            <?php foreach( $articles as $article ): ?>
                <article>

                <?php if($article->template() == 'article.text'): ?>

                    <h1>
                        <a href="<?php echo $article->url() ?>">
                        <?php echo html($article->title()) ?></a>
                    </h1>

                    <p><?php echo excerpt($article->text(), 250) ?></p>
                    <a href="<?php echo $article->url() ?>" class="morelink">more &#8250;</a>

                <?php elseif($article->template() == 'article.link'): ?>

                    <?php
                        $current_date = $article->date();
                        // Do the damn thing.
                        if ( $next_date && $article->date() ) {
                            if ( $current_date < $next_date ) {
                    ?>
                            <time class="dailydate" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
                                <?php echo date( 'l', $current_date ) ?>,
                                <?php echo ' ' . date( 'j F Y', $current_date ) ?>
                            </time>

                    <?php
                            }
                        }

                        $next_date = $article->date();
                    ?>

                    <article class="linkpost">
                        <h1>
                            <a href="<?php echo $article->link() ?>">
                            <?php echo html($article->title()) ?>&nbsp;&#8674;
                            </a>
                        </h1>

                        <?php echo kirbytext($article->text()) ?>

                        <!-- <a href="<?php echo $article->url() ?>" class="morelink">&#9749;</a> -->
                        <a href="<?php echo $article->url() ?>" class="morelink">
                            <img src="/assets/img/coffeecup_20.png" alt="Coffee cup" width="20" height="20">
                        </a>
                        <?php if ( $article->date('c') ) : ?>
                        <time class="date_article" datetime="<?php echo $article->date('c') ?>" pubdate="pubdate">
                            <a href="<?php echo $article->url() ?>">Distilled on <?php echo $article->date('l') ?>, the <?php echo $article->date('jS') ?> of <?php echo $article->date('F Y') ?>
                            </a>
                        </time>
                        <?php endif ?>
                    </article>

                <?php elseif($article->template() == 'article.video'): ?>

                <!-- put the HTML for the video post here -->

                <?php elseif($article->template() == 'article.image'): ?>

                <!-- put the HTML for the image post here -->

                <?php elseif($article->template() == 'article.quote'): ?>

                <!-- put the HTML for the quote post here -->

                <?php endif ?>

                </article>
            <?php endforeach ?>

            <?php if($articles->pagination()->hasPages()): ?>
                <nav class="pagination">

                  <?php
                    $has_next = $articles->pagination()->hasNextPage();
                    $has_prev = $articles->pagination()->hasPrevPage();
                  ?>

                  <?php if($has_next): ?>
                  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
                  <?php endif ?>

                  <?php if($has_prev): ?>
                  <a class="prev<?php if($has_next && $has_prev): ?> prev-padding-left<?php endif ?>" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
                  <?php endif ?>

                </nav>
            <?php endif ?>

        </div>
    </div>

</section>

<?php snippet('footer') ?>