<div class="summary-container page-section">
  <?php $i = 0; foreach ($parent->children()->listed() as $article): ?>


  <section
    data-article="<?=$article->id()?>"
    data-label="<?=$tag = $article->tags()->split(',')[0] ?? $article->title()->esc()?>"
    class="summary-article">

    <div class="summary-article-info-col">
      	<div class="article-thumbnail-infos">
              <h2 class="article-thumbnail-title"><span id="<?=$article->id()?>"></span><?= $article->title()->esc() ?></h2>

              <?php if ($partners = $article->partners()): ?>
                <?php if ($partners->isNotEmpty()): ?>

                  <div class="logos">
                    <span>En partenariat avec </span>
                    <?php foreach ($partners->toFiles() as $f): ?>
                      <img src="<?=$f->url()?>" alt="">
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              <?php endif; ?>


              <!-- READING TIME -->
              <?php if ($readingTime = $article->readingTime()->value()): ?>
                <span class="article-reading-time heading"><?= svg("assets/icons/timer.svg") ?> <?=$readingTime?> minute<?=((int)$readingTime > 1) ? 's' : ''; ?></span>
              <?php endif; ?>

              <?php if ($headline = $article->hat()): ?>
                <p class="article-thumbnail-headline text"><?= $article->hat()->esc() ?></p>
              <?php endif; ?>

              <?php snippet('components/button', [
                'url' => $article->url(),
                'text' => 'Lire l\'article'
              ]); ?>
        </div>
    </div>

    <div class="summary-article-image-col">
        <a href="<?= $article->url() ?>" class="">
            <?php if ($cover = $article->cover()): ?>
              <?php $r = random_int(1, 4); ?>
              <div class="blob mask mask-image-blob-<?=$r?>">
                <img src="<?= $cover->crop(600, 600)->url() ?>" alt="" class="img-fluid mask mask-contain mask-image-blob-<?=$r?>">
              </div>
            <?php endif ?>
        </a>
    </div>

    <?php $direction = ($i % 2 == 0) ? 'rl' : 'lr'; ?>
    <?php $r = random_int(0, 3); ?>

    <?= svg("assets/links/link-$direction-$r.svg") ?>


    <?php if ($visual = $article->visual()->toFile()): ?>

      <?php snippet('components/layout-visual', [
        'visual' => $visual,
        'visual_position' => $article->visual_position()->or('bottom-right'),
        'visual_width' => $article->visual_width()->or('30'),
        'visual_color' => $article->visual_color()->or('var(--primary-color)')
        ]) ?>

    <?php endif; ?>

  </section>

  <?php $i++; endforeach ?>
</div>
