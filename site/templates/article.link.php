<?php snippet('header') ?>

<div class="container linkpost">
    <div class="row">
        <div class="span2">
            <?php snippet('sidebarcontent') ?>
        </div>
        <div class="span5">
            <section class="blogarticle">
                <article>
                    <h1><a href="<?php echo $page->link() ?>"><?php echo html($page->title()) ?> &rarr;</a></h1>

                    <div class="linkings">
                	   <?php echo kirbytext($page->text()) ?>
            	   </div>
                    <a href="<?php echo url('blog') ?>" class="back">&larr; Zurück</a>
                </article>
            </section>
        </div>
</div>

<?php snippet('footer') ?>