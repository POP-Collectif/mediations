<?php

  $visual_position = $visual_position ?? 'bottom-right';
  $visual_color    = $visual_color    ?? $site->secondaryColor();
  $visual_width    = $visual_width    ?? '30'

?>

<div class="layout-visual <?= $visual_position ?>" style="--width: <?=$visual_width.'%'?>; color: <?= $visual_color ?>;">
  <?php if ($visual->extension() == 'svg'): ?>
    <?= svg($visual) ?>
  <?php else: ?>
    <img src="<?=$visual->url()?>" alt="">
  <?php endif; ?>
</div>
