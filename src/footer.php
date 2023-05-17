<?php
$menu_id = get_nav_menu_locations()['ortointelligente-navbar'];
?>

<footer class="footer">
    <div class="footer-content container">
        <div className="grid grid-cols-4 gap-5">
            <div>
                <span className="text-3xl font-bold block mb-4">Orto<br />Intelligente</span>
                <span className="text-sm block">Progetto realizzato in collaborazione con i prof e gli studenti dell'<a href="https://gobettivolta.edu.it/">I.S.I.S. P. Gobetti - A. Volta</a></span>
            </div>
            <div className="flex flex-col">
                <span className="text-lg font-semibold mb-2">Naviga</span>
                <?php foreach(wp_get_nav_menu_items( $menu_id ) as $a) : ?>
                    <a href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <span className="block text-center mt-6">Sito web realizzato da: <a href="https://pangio.it">Gioele Pannetto</a> e <a href="https://github.com/TestinaSan">Matteo Orlandi</a></span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
