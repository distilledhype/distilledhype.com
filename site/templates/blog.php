<?php snippet('header') ?>

<?php // snippet('menu') ?>

<section class="container blog">

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article>
    <h1>
      <a href="<?php echo $article->url() ?>">
        <?php echo html($article->title()) ?></a></h1>

    <p><?php echo excerpt($article->text(), 250) ?></p>
    <a href="<?php echo $article->url() ?>" class="morelink">Meahr! &rarr;</a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>