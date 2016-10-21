<section class="section--<?php echo $data->uid() ?> section--dark"
  <?php if ($coverimage = $data->coverimage()->toFile()): ?>
    style="background-image:url(<?php echo $coverimage->resize(1600)->url() ?>)"
  <?php endif ?>
>
  <div class="mx-auto max-width-4 md-flex items-center" style="height: 100%;">

    <div class="clearfix">
      <div class="col md-col-6 px1">
        <h2><?php echo $data->heading()->text() ?></h2>
          <a href="#section-what-does-it-do" class="btn btn--primary white" data-scroll>Read more</a>
          <span class="white"> or </span>
          <a href="#section-demo" class="btn btn--primary white" data-scroll>request a demo</a>
        </div>
      </div>
    </div>

  </div>

</section>