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
                <span>Naviga</span>
                <?php foreach(wp_get_nav_menu_items( $menu_id ) as $a) : ?>
                    <a href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <span class="footer-credits">Sito web realizzato da: <a href="https://pangio.it">Gioele Pannetto</a> e <a href="https://github.com/TestinaSan">Matteo Orlandi</a></span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
