<!-- <div class="coffeecup"><span>&#9749;</span></div> -->
<div class="container sidebar-sticky">

  <?php echo snippet('sidebar-about') ?>

  <i class="icon-github-circled"></i>
  <i class="icon-twitter"></i>

  <ul class="sidebar-nav">
    <?php echo snippet('menu-loop') ?>
    <li class="sidebar-nav-item">
      <a href="http://github.com/distilledhype">GitHub</a>
    </li>
  </ul>

  <p>
    <?php echo kirbytext($site->copyright()) ?>
  </p>
</div>
