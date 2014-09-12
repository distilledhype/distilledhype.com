<?php snippet('header') ?>
<?php // snippet('sidebar') ?>?>
<div class="post">

  <h1 class="post-title"><?php echo html($page->title()) ?></h1>

  <time class="post-date" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
    <?php echo date( 'l', $page->date() ) ?>,
    <?php echo ' ' . date( 'j F Y', $page->date() ) ?>
  </time>

  <?php echo kirbytext($page->text()) ?>

</div>

<?php snippet('disqus') ?>

<?php snippet('footer') ?>
