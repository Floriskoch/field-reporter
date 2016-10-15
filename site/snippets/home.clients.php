<section class="section--<?php echo $data->uid() ?> py4 px2">
  <div class="max-width-4 mx-auto">

<!--    <h2 class="mb4">--><?php //echo $data->heading()->text() ?><!--</h2>-->

    <div class="slider js-slider mb6">
      <?php foreach($data->quotes()->toStructure() as $quote) { ?>
        <div class="slider-item js-slider-item center">
          <div class="slider-item__quote mb2">"<?php echo $quote->text() ?>"</div>
          <div class="slider-item__author"><?php echo $quote->author() ?></div>
          <?php if ($quote->company()) { ?>
            <div class="slider-item__company">, <?php echo $quote->company() ?></div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

    <div class="brands mxn3 sm-flex justify-center items-center">
      <?php  // Transform the comma-separated list of filenames into a file collection
      $filenames = $data->logos()->split(',');
      if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
      $files = call_user_func_array(array($data->files(), 'find'), $filenames);

      // Use the file collection
      foreach($files as $file) { ?>
        <div class="brands__item px3 border-box">
          <img src="<?php echo $file->url() ?>" alt="" class="fit">
        </div>
      <?php } ?>
    </div>

  </div>
</section>