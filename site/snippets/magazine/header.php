<?php $no_heading = $no_heading ?? false; ?>

<div class="page-header ">

  <?php snippet('components/page-sections/page-top') ?>

  <?php if ($cover = $page->cover()): ?>
    <?php snippet('components/page-sections/header-with-cover', ['page' => $page, 'no_heading' => false]) ?>
  <?php else: ?>
    <?php snippet('components/page-sections/header-without-cover') ?>
  <?php endif; ?>

  <?php /*
  <?php if (!$no_heading): ?>
    <div class="d-flex p-3 ">
      <div class="page-header-text">
        <h1 class="page-title"><?=$page->title()->esc()?></h1>
        <div class="text hat">
          <?= $page->hat()->kt() ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


  <div class="p-absolute page-header-background">
    <?= svg('assets/elements/magazine-header-background.svg'); ?>
  </div>
  */ ?>

</div>
