<?php snippet('header') ?>

<?php
$lastMagNumber = $lastMagazine->siblings()->count();
?>


<div class="home-container">

  <div class="page-header ">

    <?php snippet('components/page-sections/page-top') ?>

      <!-- HERO -->
      <div class="hero" style="--page-primary-color: <?=$lastMagazine->primaryColor();?>; --page-secondary-color: <?=$lastMagazine->secondaryColor();?>;">
        <div class="left">
            <div class="left-2-wrapper">
              <?php snippet('components/visuals/arrows'); ?>

              <div class="img">
                <?php if ($cover = $lastMagazine->thumbnail_cover()): ?>
                  <img src="<?= $cover->crop(400, 600)->url() ?>">
                <?php endif ?>
                <span class="magazine-number">#<?= $lastMagazine->siblings()->count() ?></span>
              </div>
              <div class="text">
                <h2 class="hero-heading"><?=$lastMagazine->title()->esc()?></h2>

                <div class="d-flex">
                  <?php snippet('components/button', [
                    'url' => $lastMagazine->url(),
                    'text' => 'Sommaire',
                  ]); ?>
                </div>
              </div>
            </div>

          <!-- FORMES GRAPHIQUES -->
          <div class="color"></div>
          <div class="shape torsade" ><?= svg('assets/elements/torsade.svg'); ?></div>
        </div>

      </div>

      <!-- /HERO -->
  </div>


  <?php $previousMagazines = $magazines->slice(1); ?>
  <?php if ($previousMagazines->isNotEmpty()): ?>

     <?php snippet('components/page-section', [
        'class' => '',
        'title' => 'Les prédécents dossiers',

        'content' => snippet('components/page-sections/thumbnails', [
            'thumbnails' => $previousMagazines,
            'thumbnail_snippet' => 'magazine/thumbnail',
          ], true)
       ]) ?>

  <?php endif; ?>

  <?php /*
  <?php if ($site->partners()->isNotEmpty()): ?>

     <?php snippet('components/page-section', [
        'class' => 'dark',
        'title' => 'Nos partenaires',

        'content' => snippet('components/page-sections/logos', [
            'partners' => $site->partners()->toStructure(),
            // 'thumbnail_snippet' => 'magazine/thumbnail',
          ], true)
       ]) ?>

  <?php endif; ?>
  */ ?>


</div>


<?php snippet('footer') ?>
