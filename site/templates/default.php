<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="px2">

      <div class="max-width-4 mx-auto">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>

    </div>

  </main>

<?php snippet('footer') ?>