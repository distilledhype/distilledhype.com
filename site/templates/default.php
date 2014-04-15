<?php snippet('header') ?>
<?php // snippet('sidebar') ?>
<?php snippet('masthead') ?>

<div class="post">
  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>
