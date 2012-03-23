<?php snippet('header') ?>
<?php // snippet('menu') ?>

<section class="container blogarticle">
  <article>
    <h1><?php echo html($page->title()) ?></h1>

    <div class="linkings">
    	<?php echo kirbytext($page->text()) ?>
	</div>
    <a href="<?php echo url('blog') ?>">&larr; Zurück</a>

  </article>
</section>

<?php snippet('footer') ?>