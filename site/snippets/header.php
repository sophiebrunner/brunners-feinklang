<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $site->author() ?>">
    <meta name="description" content="<?= $site->description() ?>">
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <?= css(['assets/css/fonts.css', 'assets/css/typography.css', 'assets/css/normalize.css', 'assets/css/base.css',  'assets/css/colors.css', 'assets/css/spacing.css',  'assets/css/templates/header.css', 'assets/css/templates/footer.css', '@auto']) ?>
</head>

<body>
    <header class="header">
        <a class="logo" href="<?= $site->url() ?>">
            <?= svg('assets/icons/circle-regular.svg') ?>
            <span class="hide-element">Zur Startseite</span>
        </a>
        <nav class="navigation">
            <button class="navigation__button" id="navigation-button" aria-expanded="false">
                <span class="navigation__button--text">Menü</span>
                <?= svg('assets/icons/bars-solid.svg') ?>
                <?= svg('assets/icons/x-solid.svg') ?>
            </button>
            <ol class="navigation__list informal">
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li class="navigation__item"><a class="navigation__link" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a></li>
                <?php endforeach ?>
            </ol>
        </nav>
    </header>

    <main>