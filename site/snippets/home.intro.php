<section class="section--<?php echo $data->uid() ?>"
  <?php if ($coverimage = $data->coverimage()->toFile()): ?>
    style="background-image:url(<?php echo $coverimage->resize(1600)->url() ?>)"
  <?php endif ?>
>
  <div class="mx-auto max-width-4 py4">
    <h2>intro</h2>
  </div>

</section>