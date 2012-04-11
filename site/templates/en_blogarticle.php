<?php snippet('en_header') ?>

<div class="container">
    <div class="row">
        <div class="span2">
            <?php snippet('en_sidebarcontent') ?>
        </div>
        <div class="span5">
            <section class="blogarticle">
                <article>
                    <h1><?php echo html($page->title()) ?></h1>

                    <div class="linkings">
                	   <?php echo kirbytext($page->text()) ?>
            	   </div>
                    <a href="<?php echo url('blog') ?>" class="back">&larr; Zurück</a>
                </article>
            </section>
        </div>
</div>

<?php snippet('en_footer') ?>