<?php

  $thumbnail_class = $thumbnail_class ?? null;
  $index = 0;
?>

<div class="auto-grid thumbnails <?= $thumbnail_class ?>">

  <?php foreach ($thumbnails as $thumbnail): ?>
      <?= snippet($thumbnail_snippet, [ 'thumbnails' => $thumbnails, 'thumbnail' => $thumbnail, 'index' => $index]) ?>
      <?php $index++; ?>
  <?php endforeach; ?>

</div>
