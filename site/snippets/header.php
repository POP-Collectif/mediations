<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- Title -->
    <title><?=$site->title()->esc()?> | <?=$page->title()->esc()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Magazine en ligne à propos de l'inclusion numérique"/>

    <!-- Favicon -->
    <?php if ($favicon = $site->favicon()->toFile()): ?>
      <link rel="shortcut icon" type="image/jpg" href="<?=$favicon->url()?>">
    <?php endif; ?>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <?php
    /*
      Stylesheets can be included using the `css()` helper.
      Kirby also provides the `js()` helper to include script file.
      More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
    */
    ?>

    <?php snippet('css/theme') ?>

    <?= css([
      // 'assets/css/prism.css',
      // 'assets/css/lightbox.css',
      // 'assets/css/typo.css',
      'assets/css/index.css',
      // 'assets/css/masks.css',
      // '@auto',
      // 'assets/css/menu.css',
    ]) ?>

  </head>

  <body class="<?=$page->template()->name()?>">

    <div class="page-container">

    <!-- <div id="nav-screen-button" class="menu-button">Menu</div> -->
    <?php //snippet('components/menu') ?>
