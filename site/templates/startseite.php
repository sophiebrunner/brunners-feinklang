<?php

/**
 * Template: Startseite
 * Description: Homepage of the website
 * Contains: General info about the website
 */

?>

<?php
$image = $page->ch_image()->toFile();
?>


<?php snippet('header') ?>


<main>
    <h1><?= $page->ch_title()->esc() ?></h1>
    <div><?= $page->ch_intro()->kt() ?></div>
    <?php if ($image) : ?>
        <img src="<?= $image->url() ?>" alt="">
    <?php endif; ?>
    <div><?= $page->ch_content()->kt() ?></div>
</main>

<?php snippet('footer') ?>