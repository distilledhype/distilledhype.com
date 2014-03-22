<?php snippet('header') ?>
<?php snippet('sidebar') ?>

<div class="post">
  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>
