<?php

if (isset($_POST['ctaEmail'])) {
  $email = $_POST['ctaEmail'];
  $status = 'subscribed'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
  $list_id = '36025566f5';
  $api_key = 'f3bd0ce5bd535cf7f587b3f4ac617bca-us14';
  $merge_fields = array();

  $response = mc_subscribe($email, $status, $list_id, $api_key, $merge_fields);
}

?>
<section class="section--<?php echo $data->uid() ?> section--dark py8 px2 bg-texture-green" id="section-demo">
  <div class="max-width-3 mx-auto">

    <div class="clearfix mxn1">

      <div class="col col-12 px1">
        <div class="card card--hover px2 pt3 pb4 md-p4">

          <div class="max-width-2 mx-auto">

            <h3 class="mt0 mb2"><?php echo $data->heading()->text() ?></h3>
            <p><?php echo $data->text()->kirbytext() ?></p>

            <?php if (!isset($response)) { ?>
              <form action="/#section-demo" method="post" class="md-flex items-center">
                <input type="email" class="py1 px2 flex-auto" placeholder="<?php echo $data->input()->text() ?>" name="ctaEmail">
                <button type="submit" class="ml2 btn btn--primary"><?php echo $data->button()->text() ?></button>
              </form>
            <?php } else { ?>
              <p><?php echo $data->thankyou()->text() ?></p>
            <?php } ?>

          </div>

        </div>
      </div>

    </div>

  </div>
</section>