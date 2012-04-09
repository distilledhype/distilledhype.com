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
                <h1>
                    <a href="<?php echo $article->url() ?>">
                    <?php echo html($article->title()) ?></a>
                </h1>

                <p><?php echo excerpt($article->text(), 250) ?></p>
                <a href="<?php echo $article->url() ?>" class="morelink">mehr &rarr;</a>
            </article>
            <?php endforeach ?>

        </div>
    </div>

</section>

<?php snippet('footer') ?>