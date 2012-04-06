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

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400italic,400,300' rel='stylesheet' type='text/css'>


  <?php echo css('assets/css/bootstrap.css') ?>
  <?php echo css('assets/css/responsive.css') ?>

</head>

<body>
	<header id="logo">
    	<h1><a href="<?php echo url() ?>" id="header"><span>&#9749;</span> Die illsten Links von neulich</a></h1>
    	<p class="subtitle">&#8222;Ill, iller, illest. Bombe!&#8221; - @<a href="https://twitter.com/#!/MadeMyDay/statuses/131845647333732352">mademyday</a></p>
	</header>