<section class="section--<?php echo $data->uid() ?> section--dark py8 px2 bg-texture-green" id="section-demo">
  <div class="max-width-3 mx-auto">

    <div class="clearfix mxn1">

      <div class="col col-12 px1">
        <div class="card card--hover p4">

          <div class="max-width-2 mx-auto">

            <h3 class="mt0 mb2"><?php echo $data->heading()->text() ?></h3>

            <form action="" class="md-flex items-center">
              <input type="text" class="p1 flex-auto" placeholder="<?php echo $data->input()->text() ?>">
              <button type="submit" class="ml2 btn btn--primary"><?php echo $data->button()->text() ?></button>
            </form>

          </div>

        </div>
      </div>

    </div>

  </div>
</section>