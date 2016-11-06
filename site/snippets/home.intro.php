<section class="section--<?php echo $data->uid() ?> section--dark"
  <?php if ($coverimage = $data->coverimage()->toFile()): ?>
    style="background-image:url(<?php echo $coverimage->resize(1600)->url() ?>)"
  <?php endif ?>
>


  <div class="layer xs-hide js-layer-bg" data-depth="0.00" data-type="parallax">
    <div class="covervid-wrapper">
      <video class="covervid-video js-covervid" autoplay muted loop poster="<?php echo $coverimage->url() ?>">
        <source src="assets/build/video/intro.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <div class="layer xs-hide" data-depth="0.30" data-type="parallax">
    <img src="assets/build/images/anim1.svg" alt="" class="fit">
  </div>
  <div class="layer xs-hide" data-depth="0.40" data-type="parallax">
    <img src="assets/build/images/anim2.svg" alt="" class="fit">
  </div>
  <div class="layer xs-hide" data-depth="0.80" data-type="parallax">
    <img src="assets/build/images/anim3.svg" alt="" class="fit">
  </div>
  <div class="layer xs-hide" data-depth="1.20" data-type="parallax">
    <img src="assets/build/images/anim4.svg" alt="" class="fit">
  </div>
  <div class="layer xs-hide" data-depth="1.60" data-type="parallax">
    <img src="assets/build/images/anim5.svg" alt="" class="fit">
  </div>
  <div class="layer xs-hide" data-depth="2.00" data-type="parallax">
    <img src="assets/build/images/anim6.svg" alt="" class="fit">
  </div>
  

  <div class="layer layer-text js-layer-text is-hidden">
    <div class="mx-auto max-width-4 flex items-center">

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