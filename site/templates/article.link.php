<?php snippet('header') ?>
<?php // snippet('sidebar') ?>

<div class="post linkpost">
  <h1 class="post-title">
    <a href="<?php echo $page->link() ?>">
      <?php echo html($page->title()) ?>&nbsp;<?php echo c::get('linkicon', '&rarr;') ?>
    </a>
  </h1>

  <time class="post-date" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
    <?php echo date( 'l', $page->date() ) ?>,
    <?php echo ' ' . date( 'jS F Y', $page->date() ) ?>
  </time>

  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('disqus') ?>

<?php snippet('footer') ?>
