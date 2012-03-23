<?php snippet('header') ?>
  <header class="container">
    <h1><a href="<?php echo url() ?>">Die illsten Links von neulich.</a></h1>
  </header>
<?php // snippet('menu') ?>

<section class="container blog">

  <!-- <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?> -->

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article>
    <h1>
      <a href="<?php echo $article->url() ?>">
        <?php echo html($article->title()) ?></a></h1>

    <p><?php echo excerpt($article->text(), 150) ?></p>
    <a href="<?php echo $article->url() ?>">Gib mir die Linkings! &rarr;</a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>