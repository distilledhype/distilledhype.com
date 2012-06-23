<?php

$articles = $pages->find('blog')->children()->visible()->flip()->limit(20);

snippet('feed', array(
  // 'link'  => url('blog'),
  'link' => $page->link,
  'items' => $articles,
  'descriptionField'  => 'text',
  'descriptionExcerpt' => false
));

?>