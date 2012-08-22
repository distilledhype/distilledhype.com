<?php

$articles = $pages->find('blog')->children()->visible()->flip()->limit(20);

snippet('feed', array(
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionField' => 'text',
  'descriptionExcerpt' => false
));

?>