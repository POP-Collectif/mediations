<div class="summary-progress heading">
  <div class="m-0 p-0 flex-column">
    <div class="label"></div>
  <?php foreach ($page->children()->listed() as $article): ?>
    <div class="item" data-article="<?=$article->id()?>"><a href="#<?=$article->id()?>"></a></div>
  <?php endforeach; ?>
</div>
</div>
