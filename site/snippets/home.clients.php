<section class="section--<?php echo $data->uid() ?> py4 px2">
  <div class="max-width-2 mx-auto">

    <h3 class="mb2 mt0"><?php echo $data->heading()->text() ?></h3>

    <div class="slider js-slider mb6">
      <?php foreach($data->quotes()->toStructure() as $quote) { ?>
        <div class="slider-item js-slider-item">
          <div class="slider-item__quote mb2">
            <?php
              $intro = $quote->intro();
              if ($intro) { ?>
              <span class="slider-item__intro"><?php echo $intro; ?></span>
            <?php } ?>
            <?php echo $quote->text() ?>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
  <div class="max-width-4 mx-auto">

    <?php  // Transform the comma-separated list of filenames into a file collection
    $filenames = $data->logos()->split(',');
    if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
    $files = call_user_func_array(array($data->files(), 'find'), $filenames);
    ?>

    <?php if (count($files) > 0) { ?>
      <div class="brands pt4 mxn3 sm-flex justify-center items-center">
        <?php foreach($files as $file) { ?>
          <div class="brands__item px3 border-box">
            <img src="<?php echo $file->url() ?>" alt="" class="fit">
          </div>
        <?php } ?>
      </div>
    <?php } ?>

  </div>
</section>