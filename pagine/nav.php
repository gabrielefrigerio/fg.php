<div class="header clearfix">
    <a href="" class="header_logo"><img src="logor.jpg"></a>

    <ul class="header_menu animate">
        <?php
            //if (basename($_SERVER['PHP_SELF']) == "index.php") {
            //    echo "<li><a href='pagine/registrazione.php'>Registrati</a></li>";
            //} elseif (basename($_SERVER['PHP_SELF']) == "registrazione.php") {
            //    echo "<li><a href='../index.php'>Login</a></li>";
            //} else {
                if (basename($_SERVER['PHP_SELF']) == "home.php") {
                    echo "<li class='header_menu_item' id='active'><a href='home.php'>HOME</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='home.php'>Home</a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == "film.php") {
                    echo "<li class='header_menu_item' id='active'><a href='film.php'>FILM</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='film.php'>Film</a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == "serie_tv.php") {
                    echo "<li class='header_menu_item' id='active'><a href='serie_tv.php'>SERIE TV</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='serie_tv.php'>Serie TV</a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == "nuovi_arrivi.php") {
                    echo "<li class='header_menu_item' id='active'><a href='nuovi_arrivi.php'>NUOVI ARRIVI</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='nuovi_arrivi.php'>Nuovi arrivi</a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == "grandi_classici.php") {
                    echo "<li class='header_menu_item' id='active'><a href='grandi_classici.php'>GRANDI CLASSICI</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='grandi_classici.php'>Grandi classici</a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == "dnp.php") {
                    echo "<li class='header_menu_item' id='active'><a href='dnp.php'>DA NON PERDERE</a></li>";
                } else {
                    echo "<li class='header_menu_item'><a href='dnp.php'>Da non perdere</a></li>";
                }
            //}
        ?>
    </ul>
</div>