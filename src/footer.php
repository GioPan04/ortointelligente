<?php
$menu_id = get_nav_menu_locations()['ortointelligente-navbar'];
?>

<footer class="footer">
    <div class="post-container container">
        <div class="footer-grid">
            <div>
                <span class="footer-logo">Orto<br />Intelligente</span>
                <span class="footer-desc">Progetto realizzato in collaborazione con i prof e gli studenti dell'<a href="https://gobettivolta.edu.it/">I.S.I.S. P. Gobetti - A. Volta</a></span>
            </div>
            <div class="footer-links">
                <span class="footer-section-title">Naviga</span>
                <?php foreach(wp_get_nav_menu_items( $menu_id ) as $a) : ?>
                    <a href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
                <?php endforeach; ?>
            </div>
            <div>
                <span class="footer-section-title">Progetto promosso da</span>
                <a target="_blank" href="https://www.sapereconsumare.it/"><img class="footer-sponsor-logo" src="<?php echo get_template_directory_uri() ?>/imgs/logo-sc-footer.png" alt="Logo Saper(e)Consumare"></a>
            </div>
            <div>
                <span class="footer-section-title">Contatti</span>
                <span class="footer-desc">Indirizzo: <span>Via Roma, 77/A - 50012 Bagno a Ripoli (FI)</span></span>
                <span class="footer-desc">Telefono: <a href="tel:+39055630087">055 630087</a></span>
                <span class="footer-desc">Email: <a href="mailto:fiis02800r@istruzione.it">fiis02800r@istruzione.it</a></span>
                <span class="footer-desc">Sito web: <a href="https://www.gobettivolta.edu.it/it2/">www.gobettivolta.edu.it</a></span>
                <span class="footer-desc">Referente di progetto: <a href="mailto:o.montani@gobettivolta.edu.it">Orsola Montani</a></span>
            </div>
        </div>
        <span class="footer-credits">Sito web realizzato da: <a href="https://pangio.it">Gioele Pannetto</a> e <a href="https://github.com/TestinaSan">Matteo Orlandi</a></span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
