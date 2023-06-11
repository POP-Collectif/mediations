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

<div class="error-container d-flex flex-column page-section">

  <h1 class="error-message"><?=$page->heading()->esc()?></h1>
  <h2 class="error-type"><?=$page->subheading()->esc()?></h2>

  <div class="error-button">
    <a class="button" href="<?=$site->url()?>"><span><?=$page->buttonText()->esc()?></span></a>
  </div>

  <div class="p-absolute" style="--color: <?=$site->secondaryColor()?>;">
    <div class="arrow"><?= svg('assets/elements/arrow.svg'); ?></div>
    <div class="arrow"><?= svg('assets/elements/arrow.svg'); ?></div>
    <div class="arrow"><?= svg('assets/elements/arrow.svg'); ?></div>
    <div class="arrow"><?= svg('assets/elements/arrow.svg'); ?></div>
  </div>
</div>


<?php snippet('footer') ?>
