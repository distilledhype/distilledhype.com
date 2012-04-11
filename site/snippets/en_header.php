<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/img/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/img/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo u('assets/images/apple-touch-icon.png') ?>" />

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400italic,800,700,400,300,' rel='stylesheet' type='text/css'>


  <?php echo css('assets/css/bootstrap.css') ?>
  <?php echo css('assets/css/responsive.css') ?>

</head>

<body>
	<header class="container header">
    	<h1><a href="/en" id="header" contenteditable>The sickest things people linked to recently</a></h1>
        <p class="subtitle">Hyperlinks for front-end developers and geeks distilled from the latest hype</a></p>
	</header>
