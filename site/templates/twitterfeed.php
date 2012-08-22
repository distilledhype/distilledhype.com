<?php

$articles = $pages->find('blog')->children()->visible()->flip()->limit(20);

snippet('twitterfeed', array(
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionField' => 'text',
  'descriptionExcerpt' => false
));

?>