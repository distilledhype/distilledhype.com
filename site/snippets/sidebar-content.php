<!-- <div class="coffeecup"><span>&#9749;</span></div> -->
<div class="container sidebar-sticky">
  <?php echo snippet('sidebar-about') ?>
  <ul class="sidebar-nav">
    <?php echo snippet('menu-loop') ?>
    <li class="sidebar-nav-item">
      <a href="http://twitter.com/distilledhype" title="Kahlil's Twitter.">@distilledhype</a>
    </li>
    <li class="sidebar-nav-item">
      <?php echo str::email('hello@kahlil.co', 'eMail') ?>
    </li>
    <li class="sidebar-nav-item">
      <a href="/feed" title="Get the feed.">RSS feed</a>
    </li>
    <li class="sidebar-nav-item">
      <a href="https://www.facebook.com/distilledhype" title="Like it up.">fb</a>
    </li>
  </ul>

  <div class="influad">
    <div id='influads_block' class='influads_block'></div>
    <script type='text/javascript'>(function(){var acc='acc_964d703_pub';var st='nocss';var or='130';var e=document.getElementsByTagName('script')[0];var d=document.createElement('script');d.src=('https:' == document.location.protocol ?'https://' : 'http://') +'engine.influads.com/show/'+or+'/'+st+'/'+acc;d.type='text/javascript';d.async=true;d.defer=true; e.parentNode.insertBefore(d,e);})();</script>
  </div>
  <p>
    <?php echo kirbytext($site->copyright()) ?>
  </p>
</div>
