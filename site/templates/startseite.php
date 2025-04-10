<?php snippet('header') ?>

<main>
    <h1><?= $page->title()->kt() ?></h1>
    <p><?= $page->subtitle()->kt() ?></p>
    <?php if ($image = $page->image('choir.jpeg')) : ?>
        <img src="<?= $image->url() ?>" alt="Portrait des Chores Brunner's Feinklang.">
    <?php endif ?>
    <p><?= $page->intro()->html() ?></p>
</main>

<?php snippet('footer') ?>