<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/build/css/style.css') ?>

</head>
<body class="bg-texture-white <?php echo $page->template() ?>">

  <header class="header clearfix" role="banner">
    <div class="wrap max-width-4 mx-auto px2">
      <a class="logo" href="<?php echo url() ?>">
        <?php $logo = $site->contentURL() . '/' . $site->logo() ?>
        <img src="<?php echo ($logo) ? $logo : url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </div>
  </header>