<section class="section--<?php echo $data->uid() ?> py8 px2" id="section-why">
  <div class="max-width-4 mx-auto">
    <div class="card card--text px2 py4 md-px4 md-py8">
      <div class="max-width-3 mx-auto">
        <h2 class="mt0"><?php echo $data->heading()->text() ?></h2>
        <?php echo $data->textarea()->kirbytext() ?>
        <a href="<?php echo $pages->find('about')->url() ?>" class="btn btn--primary right"><?php echo $data->button()->text() ?></a>
      </div>
    </div>
  </div>
</section>