<?php snippet('header') ?>

<h1><?= $page->title()->esc() ?></h1>
<p><?= $page->subtitle()->html() ?></p>
<?php if ($image = $page->image('choir.jpeg')) : ?>
    <img src="<?= $image->url() ?>" alt="Portrait des Chores Brunner's Feinklang.">
<?php endif ?>
<p><?= $page->intro()->html() ?></p>
</main>

<?php snippet('footer') ?>