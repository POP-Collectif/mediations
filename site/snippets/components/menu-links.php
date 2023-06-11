<div class="d-flex nav-links">
  <?php foreach ($site->children()->listed() as $menuPage): ?>
    <a href="<?=$menuPage->url()?>"><?=$menuPage->title()->esc()?></a>
  <?php endforeach; ?>
</div>
