<?php foreach($pages->visible() AS $p): ?>
<li class="sidebar-nav-item<?php echo ($p->isOpen()) ? ' active' : '' ?>"><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
<?php endforeach ?>
