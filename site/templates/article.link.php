<?php snippet('header') ?>
<?php snippet('sidebar') ?>

<div class="post linkpost">
  <h1>
    <a href="<?php echo $page->link() ?>">
      <?php echo html($page->title()) ?> &#8674;
    </a>
  </h1>

  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>
