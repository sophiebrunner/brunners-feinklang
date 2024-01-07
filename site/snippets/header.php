<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $site->author() ?>">
    <meta name="description" content="<?= $site->description() ?>">
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <?= css(['assets/css/base.css', 'assets/css/typography.css', 'assets/css/templates/header.css', 'assets/css/templates/footer.css', '@auto']) ?>
</head>

<body>
    <header class="header">
        <a class="logo" href="<?= $site->url() ?>"><img src="/assets/icons/logo.png" alt=""></a>
        <nav class="menu">
            <button class="menu__button" id="menu-button" aria-expanded="false">
                <span class="menu__button--text">Menü</span>
                <?= svg('assets/icons/menu.svg') ?>
                <?= svg('assets/icons/close.svg') ?>
            </button>
            <ol class="menu__list informal">
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li class="menu__item"><a class="menu__link" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a></li>
                <?php endforeach ?>
            </ol>
        </nav>
    </header>

    <main>