<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This default template must not be removed. It is used whenever Kirby
  cannot find a template with the name of the content file.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>

<!-- PAGE HEADER (HERO) -->
<div class="page-header">

  <?php snippet('components/page-sections/page-top') ?>

  <?php if ($cover = $page->cover()): ?>
    <!-- COVER -->
    <?php snippet('components/page-sections/header-with-cover', ['page' => $page]) ?>
  <?php endif; ?>

</div>

<!-- THE ARTICLE  -->
<article class="article-content page-section container">

  <!-- ARTICLE HEADER -->
  <header class="d-flex flex-column">

    <div class="d-flex h3">
      <a href="<?=$page->parent()->url()?>#<?=$page->id()?>">Revenir au sommaire</a>
    </div>

    <div class="grid-2 mt-2">

      <?php if ($tags = $page->tags()->split()): ?>
        <!-- TAGS IF THERE ARE TAGS -->
        <?php snippet('components/tags', ['tags' => $tags]) ?>
      <?php endif; ?>

      <!-- ARTICLE DATE -->
      <span class="article-date"><?= svg("assets/icons/calendar.svg") ?> <?=$page->date()->toDate('d.m.Y')?></span>

      <!-- READING TIME -->
      <?php if ($readingTime = $page->readingTime()->value()): ?>
        <span class="article-reading-time"><?= svg("assets/icons/timer.svg") ?> <?=$readingTime?> minute<?=((int)$readingTime > 1) ? 's' : ''; ?></span>
      <?php endif; ?>

      <?php if ($partners = $page->partners()): ?>
        <?php if ($partners->isNotEmpty()): ?>

          <div class="logos">
            <span>En partenariat avec </span>
            <?php foreach ($partners->toFiles() as $f): ?>
              <a href="<?=$f->content()->url()?>"><img src="<?=$f->url()?>" alt="<?=$f->alt()?>"></a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>

    </div>

    <div class="header-infos-title">
      <h1><?= $page->title()->esc() ?></h1>
    </div>

  </header>

  <?php snippet('layouts', ['field' => $page->layout()]) ?>

  <footer>
      <div class="header-infos-meta d-flex">
        <div class="prev-link">
          <?php if ($page->hasPrevListed()): ?>
            <?php snippet('article/prev-next-article', [
                'label' => 'Article précédent',
                'article' => $page->prevListed()
              ]) ?>
          <?php endif ?>
        </div>
        <div class="next-link">
          <?php if ($page->hasNextListed()): ?>
            <?php snippet('article/prev-next-article', [
                'label' => 'Article suivant',
                'article' => $page->nextListed()
              ]) ?>
          <?php endif ?>
        </div>


      </div>
  </footer>

</article>

<?php snippet('footer') ?>
