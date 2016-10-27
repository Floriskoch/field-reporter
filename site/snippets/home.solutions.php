<section class="section--<?php echo $data->uid() ?> section--dark py4 px2 bg-texture-green" id="section-solutions">
  <div class="max-width-4 mx-auto">
    <h2 class="mt0 mb4"><?php echo $data->heading()->text() ?></h2>

    <div class="clearfix mxn4">

      <div class="col col-12 md-col-6 px4 mb2">
        <div class="card card--hover p4">
          <img src="<?php echo $data->productImage1()->toFile()->url() ?>" alt="" class="fit">
          <?php echo $data->productText1()->kirbytext() ?>
          <a class="btn btn--primary right" href="<?php echo $data->productUrl1()->text() ?>"><?php echo $data->productButton1()->text() ?></a>
        </div>
      </div>

      <div class="col col-12 md-col-6 px4">
        <div class="card card--hover p4">
          <img src="<?php echo $data->productImage2()->toFile()->url() ?>" alt="" class="fit">
          <?php echo $data->productText2()->kirbytext() ?>
          <a class="btn btn--primary right" href="<?php echo $data->productUrl2()->text() ?>"><?php echo $data->productButton2()->text() ?></a>
        </div>
      </div>

    </div>
    
  </div>
</section>