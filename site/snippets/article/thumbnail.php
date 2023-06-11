<div class="article-thumbnail">
  <a href="<?=$article->url()?>" class="article-link"></a>
  <?php $r = random_int(1, 4); ?>
  <div class="blob img-tinted mask mask-image-blob-<?=$r?>">

    <?php if ($cover = $article->cover()): ?>
      <img src="<?= $cover->crop(400,400)->url() ?>">
    <?php endif ?>

  </div>

  <div class="info">
    <div class="heading">
      <span><?=$tag = $article->tags()->split(',')[0] ?? $article->title()->esc()?></span>
    </div>
    <div class="highlighted-article-title">
      <p><?=$article->title()->esc()?></p>
    </div>
  </div>
</div>
