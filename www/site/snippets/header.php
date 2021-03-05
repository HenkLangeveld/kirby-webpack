<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <?= liveCSS('assets/builds/bundle.css') ?>
</head>
<body>
  <header class="header">
    <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

    <nav id="menu" class="menu">
      <?php 
      foreach ($site->children()->listed() as $item): ?>
        <a class="menu__item" href="<?= $item->url() ?>"><?= $item->title() ?></a>
      <?php endforeach ?>
    </nav>
  </header>
