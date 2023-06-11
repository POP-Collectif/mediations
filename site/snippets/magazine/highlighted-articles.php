<div class="highlighted-articles">

  <?php foreach ($articles as $article) : ?>
    <?php snippet('article/thumbnail', [ 'article' => $article ]) ?>
  <?php endforeach; ?>

</div>
