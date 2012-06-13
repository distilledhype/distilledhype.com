<?php snippet('header') ?>

<?php // snippet('menu') ?>

<section class="container blog">

    <div class="row">
        <div class="span2">
            <?php snippet('sidebarcontent') ?>
        </div>
        <div class="span5">

            <?php foreach($page->children()->visible()->flip() as $article): ?>
            <article>

            <?php if($article->template() == 'article.text'): ?>

                <h1>
                    <a href="<?php echo $article->url() ?>">
                    <?php echo html($article->title()) ?></a>
                </h1>

                <p><?php echo excerpt($article->text(), 250) ?></p>
                <a href="<?php echo $article->url() ?>" class="morelink">more &rarr;</a>

            <?php elseif($article->template() == 'article.link'): ?>

                 <h1>
                    <a href="<?php echo $article->link() ?>">
                    <?php echo html($article->title()) ?> &rarr;</a>
                </h1>

                <article><?php echo kirbytext($article->text()) ?></article>
                <a href="<?php echo $article->url() ?>" class="morelink">link post &#8250;</a>

            <?php elseif($article->template() == 'article.video'): ?>

            <!-- put the HTML for the video post here -->

            <?php elseif($article->template() == 'article.image'): ?>

            <!-- put the HTML for the image post here -->

            <?php elseif($article->template() == 'article.quote'): ?>

            <!-- put the HTML for the quote post here -->

            <?php endif ?>

            </article>
            <?php endforeach ?>

        </div>
    </div>

</section>

<?php snippet('footer') ?>