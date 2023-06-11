<?php $magazine = $thumbnail; ?>

<div class="magazine-thumbnail">
  <a href="<?=$magazine->url()?>"></a>
  <div class="img">
    <?php if ($cover = $magazine->cover()): ?>
      <img class="magazine-thumbnail-cover" src="<?=$cover->url()?>" alt="">
    <?php endif; ?>
    <span class="magazine-number"><span class="sharp">#</span><?= $thumbnails->count() - $index?></span>
  </div>

  <span class="magazine-thumbnail-title heading"><?=$magazine->title()->esc()?></span>
</div>
