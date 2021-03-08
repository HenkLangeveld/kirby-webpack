<?php snippet('header') ?>

<main>
  <h1><?= $page->title()->html() ?></h1>
  <p><?= $page->text() ?></p>
  <ul>
    <?php 
      foreach ($page->children()->listed() as $item): ?>
        <li><a class="menu__item" href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>
