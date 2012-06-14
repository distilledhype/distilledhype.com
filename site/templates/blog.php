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
                <a href="<?php echo $article->url() ?>" class="morelink">more &#8250;</a>

            <?php elseif($article->template() == 'article.link'): ?>

                <article class="linkpost">
                    <h1>
                        <a href="<?php echo $article->link() ?>">
                        <?php echo html($article->title()) ?> &#8674;</a>
                    </h1>

                    <?php echo kirbytext($article->text()) ?>

                    <!-- <a href="<?php echo $article->url() ?>" class="morelink">&#9749;</a> -->
                    <a href="<?php echo $article->url() ?>" class="morelink"><img src="/assets/img/coffeecup_25.png" alt=""></a>
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

        </div>
    </div>

</section>

<?php snippet('footer') ?>