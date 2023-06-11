<div id="nav-bar" class="nav-bar">
  <!-- <div class="container"> -->
    <div class="nav-wrapper">
      <a class="nav-logo" aria-label="Accueil" href="<?=page('home')->url()?>"><?=$site->title()->esc()?></a>

      <?php snippet('components/menu-links') ?>

    </div>
  <!-- </div> -->
</div>
<div class="nav-bar-bg"></div>



<?php /*
<div id="nav-screen-container" class="menu-overlay">
  <div class="d-none d-md-block menu-image">
    <img src="<?=url('demi-disques.png')?>" alt="">
  </div>
  <div class="p-4">
    <div class="col">
      <h1><a class="heading" href="<?=page('home')->url()?>"><?=$site->title()->esc()?></a></h1>
    </div>
    <div class="align-self-center">
      <div class="text">
        <?= $site->menuText()->kt() ?>
      </div>
      <div class="links">
        <a class="heading" href="<?=page('home')->url()?>">Accueil</a>
        <a class="heading" href="<?=page('mentions-legales')->url()?>">Mentions légales</a>
      </div>
    </div>
  </div>
</div>
*/ ?>
