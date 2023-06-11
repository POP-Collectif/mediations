<?php snippet('header') ?>

<!-- PAGE HEADER (HERO) -->
<div class="page-header">

  <?php snippet('components/page-sections/page-top') ?>

  <?php if ($cover = $page->cover()): ?>
    <?php snippet('components/page-sections/header-with-cover', ['page' => $page]) ?>
  <?php else: ?>
    <?php snippet('components/page-sections/header-without-cover') ?>
  <?php endif; ?>

</div>

<article class="page-section container">
  <header>

      <div class="header-infos-title">
        <h1><?= $page->title()->esc() ?></h1>
      </div>

  </header>

  <?php snippet('layouts', ['field' => $page->layout()]) ?>
</article>

<?php snippet('footer') ?>
