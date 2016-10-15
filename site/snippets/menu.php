<nav role="navigation">

  <ul class="list-reset my0 right">
    <?php foreach($pages->visible() as $p): ?>
    <li class="inline-block ml4 <?php e($p->isOpen(), ' active') ?>">
      <a class="btn btn--primary bold" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
