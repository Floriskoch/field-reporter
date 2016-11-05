<nav role="navigation">

  <ul class="list-reset my0 right">
    <li class="md-inline-block ml4 xs-hide">
      <a href="<?php e(!$page->isHomepage(), url()) ?>#section-solutions" class="btn btn--primary bold" data-scroll>Solutions</a>
    </li>
    <?php foreach($pages->visible() as $p): ?>
    <li class="md-inline-block ml4 xs-hide <?php e($p->isOpen(), ' active') ?>">
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
    <li class="md-inline-block ml2 md-ml4">
      <a href="<?php e(!$page->isHomepage(), url()) ?>#section-demo" class="btn btn--cta bold" data-scroll>Request a demo</a>
    </li>
    <li class="md-inline-block ml2 xs-hide">
      <a href="http://my.fieldreporter.nl" class="btn btn--secondary" data-scroll>Log in</a>
    </li>
  </ul>

</nav>
