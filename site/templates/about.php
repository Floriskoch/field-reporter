<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="px2 page-intro">
      <div class="max-width-4 mx-auto pt4 pb6">

        <h1 class="mb1"><?php echo $page->title()->html() ?></h1>
        <p class="my0"><?php echo $page->text()->kirbytext() ?></p>

      </div>
    </section>

    <section class="px2 bg-texture-green">
      <div class="max-width-4 mx-auto py4">

        <div class="card p2 md-p4">
          <h2 class="mt0 mb2">Team</h2>
          <p class="mb4"><?php echo $page->team()->text() ?></p>

          <div class="clearfix">

            <?php $i = 1; foreach($page->profiles()->toStructure() as $profile) { ?>
            <div class="profile col md-col-4 px1 md-px3 mb6 center md-left-align">
              <div class="profile__image mb3">
                <img src="<?php echo $profile->image()->toFile()->url() ?>" alt="" class="circle">
              </div>
              <div class="profile__name bold mb1"><?php echo $profile->name() ?></div>
              <div class="profile__job mb1"><?php echo $profile->job() ?></div>
              <div class="profile__description"><?php echo $profile->description() ?></div>
            </div>
            <?php echo ($i % 3 === 0) ? '</div><div class="clearfix">' : '' ?>
            <?php $i++; } ?>

          </div>

        </div>

      </div>
    </section>

  </main>

<?php snippet('footer') ?>
