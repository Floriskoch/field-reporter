<section class="section--<?php echo $data->uid() ?> py4 px2">
  <div class="max-width-4 mx-auto">

    <?php $i = 0; foreach($data->blocks()->toStructure() as $block) { ?>
      <div class="clearfix py2 md-flex items-center">
        <?php if ($i % 2 == 0) { ?>
          <div class="col md-col-8 md-hide lg-hide">
            <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
          </div>
          <div class="col md-col-4">
            <h3 class="mb1"><?php echo $block->heading() ?></h3>
            <?php echo $block->text()->kirbytext() ?>
          </div>
          <div class="col md-col-8 xs-hide sm-hide">
            <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
          </div>
        <?php } else { ?>
          <div class="col md-col-8">
            <img src="<?php echo $block->image()->toFile()->url() ?>" alt="" class="fit">
          </div>
          <div class="col md-col-4">
            <h3 class="mb1"><?php echo $block->heading() ?></h3>
            <?php echo $block->text()->kirbytext() ?>
          </div>
        <?php } ?>
      </div>
    <?php $i++; } ?>

  </div>
</section>