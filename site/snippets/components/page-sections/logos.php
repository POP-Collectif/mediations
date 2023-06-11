<?php

  $thumbnail_class = $thumbnail_class ?? null;
  $index = 0;
?>

<div class="auto-grid logos <?= $thumbnail_class ?>">

  <?php foreach ($partners as $partner): ?>

      <a href="#" class="partner-logo"><img class="img-contain" src="<?=$partner->logo()->toFile()?->url()?>" alt=""></a>

      <?php $index++; ?>
  <?php endforeach; ?>

</div>
