<?php snippet('header') ?>

<main class="main">
    <h1><?= $page->title()->esc() ?></h1>
    <p><?= $page->intro()->kt() ?></p>
</main>

<?php snippet('footer') ?>