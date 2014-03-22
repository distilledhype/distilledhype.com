<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<div class="posts">
  <?php $next_date = ''; ?>
  <?php $articles = $page->children()->visible()->flip()->paginate(42) ?>
  <?php foreach( $articles as $article ): ?>

  <?php
      $current_date = $article->date();
      // Do the damn thing.
      if ( $next_date && $article->date() ) {
          if ( $current_date < $next_date ) {
          }
      }

      $next_date = $article->date();
  ?>

  <?php if($article->template() == 'article.text'): ?>

  <div class="post">
    <h1 class="post-title">
      <a href="<?php echo $article->url() ?>">
      <?php echo html($article->title()) ?></a>
    </h1>

    <time class="post-date" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
      <?php echo date( 'l', $current_date ) ?>,
      <?php echo ' ' . date( 'j F Y', $current_date ) ?>
    </time>

    <p><?php echo kirbytext($article->text()) ?></p>
  </div>

  <?php elseif($article->template() == 'article.link'): ?>

  <div class="post linkpost">
    <h1 class="post-title">
      <a href="<?php echo $article->link() ?>">
      <?php echo html($article->title()) ?>&nbsp;&#8674;
      </a>
    </h1>

    <time class="post-date" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
      <a href="<?php echo $article->url() ?>">
        <?php echo date( 'l', $current_date ) ?>,
        <?php echo ' ' . date( 'j F Y', $current_date ) ?>
      </a>
    </time>

    <?php echo kirbytext($article->text()) ?>
  </div>

  <?php elseif($article->template() == 'article.video'): ?>

  <!-- put the HTML for the video post here -->

  <?php elseif($article->template() == 'article.image'): ?>

  <!-- put the HTML for the image post here -->

  <?php elseif($article->template() == 'article.quote'): ?>

  <!-- put the HTML for the quote post here -->

  <?php endif ?>

  <?php endforeach ?>

  <?php if($articles->pagination()->hasPages()): ?>
  <nav class="pagination">

    <?php
      $has_next = $articles->pagination()->hasNextPage();
      $has_prev = $articles->pagination()->hasPrevPage();
    ?>

    <?php if($has_next): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
    <?php endif ?>

    <?php if($has_prev): ?>
    <a class="prev<?php if($has_next && $has_prev): ?> prev-padding-left<?php endif ?>" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
    <?php endif ?>

  </nav>
  <?php endif ?>

</div>

<?php snippet('footer') ?>
