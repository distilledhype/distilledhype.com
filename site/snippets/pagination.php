<?php if($articles->pagination()->hasPages()):
  $has_next = $articles->pagination()->hasNextPage();
  $has_prev = $articles->pagination()->hasPrevPage();
?>
<div class="pagination">
  <?php if($has_next): ?>
  <a class="pagination-item older" href="<?php echo $articles->pagination()->nextPageURL() ?>">
    Older
  </a>
  <?php else: ?>
  <span class="pagination-item older">Older</span>
  <?php endif ?>

  <?php if($has_prev): ?>
  <a class="pagination-item newer" href="<?php echo $articles->pagination()->prevPageURL() ?>">
    Newer
  </a>
  <?php else: ?>
  <span class="pagination-item newer">Newer</span>
  <?php endif ?>
</div>
<?php endif ?>
