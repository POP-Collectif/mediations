<style media="screen">
  :root{

    --background-color: white;
    <?php if ($backgroundColor = $site->backgroundColor()): ?>
      --background-color: <?=$backgroundColor?>;
    <?php endif; ?>

    <?php if ($textColor = $site->textColor()): ?>
      --text-color: <?=$textColor?>;
    <?php endif; ?>

    <?php if ($menuBackgroundColor = $site->menuBackgroundColor()): ?>
      --menu-background-color: <?=$menuBackgroundColor?>;
    <?php endif; ?>

    <?php if ($menuTextColor = $site->menuTextColor()): ?>
      --menu-text-color: <?=$menuTextColor?>;
    <?php endif; ?>

    <?php if ($primaryColor = $site->primaryColor()): ?>
      --primary-color: <?=$primaryColor?>;
    <?php endif; ?>

    <?php if ($secondaryColor = $site->secondaryColor()): ?>
      --secondary-color: <?=$secondaryColor?>;
    <?php endif; ?>


    <?php if ($pagePrimaryColor = $page->primaryColor()): ?>
      --page-primary-color: <?=$pagePrimaryColor->or($primaryColor)?>;
    <?php endif; ?>

    <?php if ($pageSecondaryColor = $page->secondaryColor()): ?>
      --page-secondary-color: <?=$pageSecondaryColor->or($secondaryColor)?>;
    <?php endif; ?>
  }


  <?php if ($page->template()->name() == 'article'): ?>
    body.article{
      --page-primary-color: <?=$page->parent()->primarycolor()?>;
      --page-seondary-color: <?=$page->parent()->secondarycolor()?>;
    }
  <?php endif; ?>
</style>
