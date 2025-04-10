<?php

/**
 * Snippet: Navigation
 * Description: Markup for main navigation of the website
 * Contains: Navigation with list, items and links
 */

?>

<nav class="navigation" aria-label="Hauptnavigation">
    <button class="navigation__button" id="navigation-button">
        Menü
        <?= svg('/svg/menu.svg') ?>
        <?= svg('/svg/x.svg') ?>
    </button>
    <ol class="navigation__list list" role="list">
        <?php foreach ($site->children()->listed() as $item) : ?>
            <li class="navigation__item">
                <a
                    class="navigation__link"
                    href="<?= $item->url() ?>" <?php e($item->isActive(), 'aria-current="page"') ?>>
                    <?= $item->title()->esc() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ol>
</nav>