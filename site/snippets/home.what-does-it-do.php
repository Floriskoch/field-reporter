<section class="section--<?php echo $data->uid() ?> py4 px2 bg-texture-green" id="section-what-does-it-do">
  <div class="max-width-4 mx-auto">

    <div class="card">

      <div class="border-box clearfix px2 md-px6">
        <h2 class="mb0 mt4"><?php echo $data->heading()->text() ?></h2>
        <p class="mb6"><?php echo $data->headingText()->text() ?></p>
      </div>

      <?php $i = 0; foreach($data->blocks()->toStructure() as $block) { ?>
        <div class="block clearfix py2 md-flex items-center px2 md-px4">
          <?php if ($i % 2 == 0) { ?>
            <div class="col md-col-6 md-hide lg-hide md-p3">
              <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
            </div>
            <div class="col md-col-6 md-p3">
              <h3 class="mb1 mt0 md-mt2"><?php echo $block->heading() ?></h3>
              <?php echo $block->text()->kirbytext() ?>
            </div>
            <div class="col md-col-6 xs-hide sm-hide md-p3">
              <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
            </div>
          <?php } else { ?>
            <div class="col md-col-6 md-p3">
              <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
            </div>
            <div class="col md-col-6 md-p3">
              <h3 class="mb1 mt0 md-mt2"><?php echo $block->heading() ?></h3>
              <?php echo $block->text()->kirbytext() ?>
            </div>
          <?php } ?>
        </div>
      <?php $i++; } ?>
    </div>

  </div>
  <div class="bg-rounded bg-rounded--bottom"></div>
</section>
