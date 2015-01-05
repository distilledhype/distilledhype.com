<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Default Template
pages: true
  sort: flip
  template:
    - article.link
    - article.text
files: true
fields:

  title:
    label: Title
    type:  text

  text:
    label: Text
    type:  textarea
    size:  large
