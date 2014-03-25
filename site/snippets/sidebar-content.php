<!-- <div class="coffeecup"><span>&#9749;</span></div> -->
<div class="container sidebar-sticky">

  <?php echo snippet('sidebar-about') ?>

  <div class="sidebar-icons">
    <a href="http://github.com/distilledhype">
      <i class="icon-github-circled"></i>
    </a>
    <a href="http://twitter.com/distilledhype">
      <i class="icon-twitter-circled-1"></i>
    </a>
    <a href="<?php echo str::encode('mailto:hello@kahlil.co') ?>">
      <i class="icon-mail-circled"></i>
    </a>
  </div>

  <ul class="sidebar-nav">
    <?php echo snippet('menu-loop') ?>
  </ul>

  <p>
    <?php echo kirbytext($site->copyright()) ?>
  </p>
</div>
