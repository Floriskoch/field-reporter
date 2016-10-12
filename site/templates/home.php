<?php snippet('header'); ?>

<main role="main">
  <?php foreach(page('home')->children() as $content) {
    snippet($content->intendedTemplate(), array('content' => $content));
  } ?>
</main>
<?php snippet('footer'); ?>