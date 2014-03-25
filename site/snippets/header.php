<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="viewport" content="width=device-width">
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/img/favicon.ico') ?>" />

  <meta name="viewport" content="width=device-width">

  <?php echo css('assets/css/poole.css') ?>
  <?php echo css('assets/css/syntax.css') ?>
  <?php echo css('assets/css/fontello.css') ?>
  <?php echo css('assets/css/distilledhype.css') ?>

</head>
<body class="preload">
  <div class="container content">
