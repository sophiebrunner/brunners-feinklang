<footer class="footer">
    <nav class="footer__menu">
        <ol class="footer__list informal">
            <li class="footer__item"><a class="footer__link" href="<?= page('impressum')->url() ?>">Impressum</a></li>
            <li class="footer__item"><a class="footer__link" href="<?= page('datenschutz')->url() ?>">Datenschutz</a></li>
        </ol>
    </nav>
    <p><?= $site->copyright() ?></p>
</footer>

<?= js([
    '/js/app.min.js',
    '@auto'
]) ?>

</body>

</html>