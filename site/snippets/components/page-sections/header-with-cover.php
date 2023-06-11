
<div class="img-tinted">
    <img class="" src="<?= $page->cover()->crop(1920, 800)->url() ?>" alt="">
    <?php $no_heading = $no_heading ?? true; ?>
    <?php if (!$no_heading): ?>
      <div class="d-flex p-3">
        <div class="page-header-text">
          <h1 class="page-title"><?=$page->title()->esc()?></h1>
          <div class="text hat">
            <?= $page->hat()->kt() ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
</div>
