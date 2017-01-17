<?php

if (isset($_POST['ctaEmail'])) {
  $email = $_POST['ctaEmail'];
  $status = 'pending'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
  $list_id = '36025566f5';
  $api_key = 'f3bd0ce5bd535cf7f587b3f4ac617bca-us14';
  $merge_fields = array();

  $response = mc_subscribe($email, $status, $list_id, $api_key, $merge_fields);
}

?>

<section class="section--<?php echo $data->uid() ?> section--dark py4 px2 bg-texture-green" id="section-demo">

  <div class="bg-rounded bg-rounded--top"></div>

  <div class="max-width-3 mx-auto">

    <div class="clearfix mxn1">

      <div class="col col-12 px1">
        <div class="card card--hover px2 pt3 pb4 md-p4">

          <div class="max-width-2 mx-auto">

            <h3 class="mt0 mb2"><?php echo $data->heading()->text() ?></h3>
            <p><?php echo $data->text()->kirbytext() ?></p>

              <!-- Begin MailChimp Signup Form -->
              <div id="mc_embed_signup">
                <form action="//fieldreporter.us14.list-manage.com/subscribe/post?u=147fcc0304b7f2bac397eba42&amp;id=36025566f5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                      <label for="mce-EMAIL" class="mb1 inline-block">Email address
                      </label>
                      <input type="email" value="" name="EMAIL" class="required email input-cta block col-12 mb2" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-MMERGE1" class="mb1 inline-block">Name
                      </label>
                      <input type="text" value="" name="MMERGE1" class="required input-cta block col-12 mb2" id="mce-MMERGE1">
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-MMERGE2" class="mb1 inline-block">Organisation
                      </label>
                      <input type="text" value="" name="MMERGE2" class="required input-cta block col-12 mb2" id="mce-MMERGE2">
                    </div>
                    <div class="mc-field-group size1of2">
                      <label for="mce-MMERGE3" class="mb1 inline-block">Phone (not required) </label>
                      <input type="text" name="MMERGE3" class="input-cta block col-12 mb3" value="" id="mce-MMERGE3">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_147fcc0304b7f2bac397eba42_36025566f5" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="<?php echo $data->button()->text() ?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn--cta bold col-12 lg-"></div>
                  </div>
                </form>
              </div>

              <!--End mc_embed_signup-->

          </div>

        </div>
      </div>

    </div>

  </div>
</section>