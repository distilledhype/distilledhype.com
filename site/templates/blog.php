<?php snippet('header') ?>
<?php // snippet('sidebar') ?>

<div class="posts">
  <?php $next_date = ''; ?>
  <?php $articles = $page->children()->visible()->flip()->paginate(5) ?>
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

  <?php if ($article->draft() != 'true'): ?>
    <?php if ($article->template() == 'article.text'): ?>

    <div class="post">
      <h1 class="post-title">
        <a href="<?php echo $article->url() ?>">
        <?php echo html($article->title()) ?></a>
      </h1>

      <time class="post-date" datetime="<?php echo $article->date() ?>" pubdate="pubdate">
        <a href="<?php echo $article->url() ?>">
          <?php echo date( 'l', $article->date() ) ?>,
          <?php echo ' ' . date( 'j F Y', $article->date() ) ?>
        </a>
      </time>

      <p><?php echo kirbytext($article->text()) ?></p>
    </div>

    <?php elseif ($article->template() == 'article.link'): ?>

    <div class="post linkpost">
      <h1 class="post-title">
        <a href="<?php echo $article->link() ?>">
        <?php echo html($article->title()) ?>&nbsp;<?php echo c::get('linkicon', '&rarr;') ?>
        </a>
      </h1>

      <time class="post-date" datetime="<?php echo $article->date() ?>" pubdate="pubdate">
        <a href="<?php echo $article->url() ?>">
          <?php echo date( 'l', $article->date() ) ?>,
          <?php echo ' ' . date( 'j F Y', $article->date() ) ?>
        </a>
      </time>

      <?php echo kirbytext($article->text()) ?>
    </div>

    <?php elseif ($article->template() == 'article.video'): ?>

    <!-- put the HTML for the video post here -->

    <?php elseif ($article->template() == 'article.image'): ?>

    <!-- put the HTML for the image post here -->

    <?php elseif ($article->template() == 'article.quote'): ?>

    <!-- put the HTML for the quote post here -->

    <?php endif ?>
  <?php endif ?>

  <?php endforeach ?>

  <?php snippet('pagination', array('articles' => $articles)) ?>

</div>

<?php snippet('footer') ?>
