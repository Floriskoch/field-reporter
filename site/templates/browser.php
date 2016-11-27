<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="max-width-2 mx-auto center pt4 pb8">

      <img src="<?php echo $page->browserImage()->toFile()->url() ?>" alt="">

      <h1><?php echo $page->heading() ?></h1>
      <p><?php echo $page->text() ?></p>

    </div>

  </main>

<?php snippet('footer') ?>