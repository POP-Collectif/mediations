<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This layouts snippet renders the content of a layout
  field with our custom grid system.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>





<?php
$v = [];
$variables = $page->dictionnary()->yaml();
foreach ($variables as $var) {
  $v[$var['key']] = $var['value'];
}
?>

<?php foreach ($field->toLayouts() as $layout): ?>


<div class="layout p-relative">

  <?php if ($visual = $layout->attrs()->visual()->toFile()): ?>
      <div class="layout-visual <?= $layout->attrs()->visual_position()->or('bottom-right') ?>" style="--width: <?=$layout->attrs()->visual_width().'%'?>; color: <?= $layout->attrs()->visual_color()->or('var(--primary-color)'); ?>;">
        <?php if ($visual->extension() == 'svg'): ?>
          <?= svg($visual) ?>
        <?php else: ?>
          <img src="<?=$visual->url()?>" alt="">
        <?php endif; ?>
      </div>
  <?php endif; ?>

  <section class="grid" id="<?= esc($layout->id(), 'attr') ?>" style="--gutter: 1.5rem;">
    <?php foreach ($layout->columns() as $column): ?>
    <div class="grid-item grid-col-<?= $column->span() ?>">

      <?php foreach ($column->blocks() as $block): ?>
        <div style="position :relative;">
          <?php if ($trame = $block->trame()->toFile()): ?>
            <div class="trame-container">
              <?= Str::template(svg($trame), ['fill' => $block->trame_fill()]) ?>
            </div>
          <?php endif; ?>

          <div class="block block-type-<?= $block->type() ?> mb-1">
            <?= Str::template($block, array_merge($page->content()->fields(), $v)) ?>
          </div>

        </div>

        <?php endforeach ?>
    </div>
    <?php endforeach ?>
  </section>
</div>
<?php endforeach ?>
