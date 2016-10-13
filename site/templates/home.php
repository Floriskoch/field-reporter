<?php snippet('header'); ?>

<main role="main">
  <?php foreach($page->children()->visible() as $section): ?>
    <?php snippet('home.' . $section->uid(), array('data' => $section)) ?>
  <?php endforeach ?>
</main>
<?php snippet('footer'); ?>