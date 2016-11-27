<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="px2 page-intro">

      <div class="max-width-4 mx-auto md-px4 py4">

        <div class="clearfix">
          <div class="col md-col-8 md-px4">
            <h1 class="h3 mb1"><?php echo $page->title()->html() ?></h1>
            <p class="my0"><?php echo $page->headingText()->kirbytext() ?></p>
          </div>

          <div class="col md-col-4 mt4 md-mt2 md-pr4">
            <img src="<?php echo $page->headingImage()->toFile()->url() ?>" alt="" class="fit">
          </div>
        </div>

      </div>

    </section>

    <section class="px2">
      <div class="max-width-4 mx-auto py4">

        <div class="card px2 pt3 pb0 md-p4">
          <h3 class="mt0 mb2"><?php echo $page->sellingPointsHeading()->text() ?></h3>
          <p class="mb4"><?php echo $page->sellingPointsText()->text() ?></p>

          <div class="clearfix">

            <?php $i = 1; foreach($page->sellingPoints()->toStructure() as $sellingPoint) { ?>
            <div class="selling-point col md-col-4 px1 md-px3 mb6 center md-left-align">
              <div class="selling-point__number mb3 mx-auto"><span><?php echo $i ?></span></div>
              <div class="bold mb1"><?php echo $sellingPoint->name() ?></div>
              <div class=""><?php echo $sellingPoint->description() ?></div>
            </div>
            <?php echo ($i % 3 === 0) ? '</div><div class="clearfix">' : '' ?>
            <?php $i++; } ?>

          </div>

        </div>

      </div>
    </section>

  </main>

<?php snippet('footer') ?>
