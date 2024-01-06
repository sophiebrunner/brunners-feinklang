<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/base.css') ?>
</head>
<body>
    <main>
        <header class="header">
            <a href="<?= $site->url() ?>" class="logo">
            <?= $page->title() ?>
        </a>
        <nav class="menu">
            <ol>
<?php foreach ($site->children()->listed() as $item): ?>
<li>
    <a href="<?$item->url() ?>"><?= $item->title() ?></a>
</li>
<?php endforeach ?>

</ol>
        </nav>
        </header>
        <h1><?= $page->title() ?></h1>
        <p><?= $page->text() ?></p>
    </main>
    <footer>
        <p>Made by Sophie Brunner</p>
    </footer>
</body>
</html>


