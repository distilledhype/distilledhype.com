<?php if(!defined('KIRBY')) exit ?>

# link blueprint

title: Link Post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text

  link:
    label: Link
    type: url

  date:
    label: Date
    type: date

  text:
    label: Text
    type:  textarea
    size:  large
