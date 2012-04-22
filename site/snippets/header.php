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

  <link rel="shortcut icon" href="<?php echo url('assets/img/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/img/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo u('assets/images/apple-touch-icon.png') ?>" />

  <meta name="viewport" content="width=device-width">
  <link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/DistilledFromTheHype" title="Distilled From The Hype - The Feed" />
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400italic,800,700,400,300,' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/bootstrap.css') ?>
  <?php echo css('assets/css/responsive.css') ?>

</head>
<body>
	<header class="container header">
    	<h1><a href="<?php echo url() ?>" id="header">Distilled From The Hype</a></h1>
        <p class="subtitle">Hyperlinks for front-end developers and geeks distilled from the latest hype</p>
	</header>
