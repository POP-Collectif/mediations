
  <footer></footer>
  <div class="footer-row d-flex">
    <span>© <?= date('Y') ?> - <?= $site->title()->esc() ?></span>

    <?php snippet('menu-links') ?>
    
    <a href="<?= page('mentions-legales')->url() ?>"><?= page('mentions-legales')->title()->esc() ?></a>
  </div>

</div>
<!-- /.page-container -->

    <?= js([
      // 'assets/js/prism.js',
      // 'assets/js/lightbox.js',
      'assets/js/index.js',
    ]) ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
  </body>
</html>
