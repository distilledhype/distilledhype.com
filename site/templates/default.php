<?php snippet('header') ?>
<?php //snippet('menu') ?>
<?php //snippet('submenu') ?>

<section class="container">
    <div class="row">
        <div class="span2">
            <?php snippet('sidebarcontent') ?>
        </div>
        <div class="span5">
            <article>
                <h1><?php echo html($page->title()) ?></h1>
                <?php echo kirbytext($page->text()) ?>
            </article>
        </div>
</section>

<?php snippet('footer') ?>