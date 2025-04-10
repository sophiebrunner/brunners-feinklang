<?php

/**
 * Snippet: Header
 * Description: Markup for banner
 * Contains: Header with Logo and navigation
 */

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title()->esc() ?> | <?= $site->title()->esc() ?></title>
    <meta name="description" content="<?= $site->description() ?>">
    <?= css(['/css/style.min.css', '@auto']) ?>
</head>

<body>
    <header class="header">
        <a class="logo" title="Zur Startseite" href="<?= $site->url() ?>">
            <?= svg('/site/brunners-feinklang.svg') ?>
        </a>
        <?php snippet('navigation') ?>
    </header>