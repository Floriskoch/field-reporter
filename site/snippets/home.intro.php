<?php $covervideo = ($data->coverVideo()->toFile()) ? $data->coverVideo()->toFile()->url() : ''; ?>
<?php $coverimage = ($data->coverimage()->toFile()) ? $data->coverimage()->toFile()->resize(1600)->url() : ''; ?>
<section class="section--<?php echo $data->uid() ?> section--dark" id="section-intro">

  <div class="layer layer-bg js-layer-bg" data-depth="0.00" data-type="parallax" style="background-image: url('<?php echo $coverimage ?>')">

    <?php if ($covervideo) { ?>
    <div class="covervid-wrapper">
      <video class="covervid-video js-covervid" autoplay muted loop poster="<?php echo $coverimage ?>">
        <source src="<?php echo $covervideo ?>" type="video/mp4">
      </video>
    </div>
    <?php } ?>

  </div>

  <div class="layer layer-1 xs-hide" data-depth="0.30" data-type="parallax"></div>
  <div class="layer layer-2 xs-hide" data-depth="0.40" data-type="parallax"></div>
  <div class="layer layer-3 xs-hide" data-depth="0.80" data-type="parallax"></div>
  <div class="layer layer-4 xs-hide" data-depth="1.20" data-type="parallax"></div>
  <div class="layer layer-5 xs-hide" data-depth="1.60" data-type="parallax"></div>
  <div class="layer layer-6 xs-hide" data-depth="2.00" data-type="parallax"></div>

  <div class="layer layer-text js-layer-text is-hidden">
    <div class="mx-auto max-width-4 flex items-center">

      <div class="clearfix col-12">
        <div class="col md-col-6 px2">
          <h2 class="mb0"><?php echo $data->heading()->text() ?></h2>
          <p class="larger"><?php echo $data->tagline()->text() ?></p>
          <a href="#section-what-does-it-do" class="btn btn--primary white" data-scroll>Read more</a>
          <span class="white"> or </span>
          <a href="#section-demo" class="btn btn--primary white" data-scroll>request a demo</a>
        </div>
      </div>

    </div>
  </div>

</section>