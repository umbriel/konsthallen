<?php snippet('header') ?>

  <main class="main row" role="main">

    <div class="text">

      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kt() ?>
    </div>

    <hr>

    <?php snippet('exhibit-loop') ?>

  </main>

<?php snippet('footer') ?>
