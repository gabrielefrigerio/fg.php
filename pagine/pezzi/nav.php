<?php
    if(isset($_SESSION['pre'])){
        $origin = $_SESSION['pre'];
    }
    else {
        $origin = "";
    }
?>

<div class="header clearfix">
    <div class="navcentro">
        <ul>
            <a href="" class="header_logo"><img src="../immagini/logor.jpg"></a>
                <?php
                    if (basename($_SERVER['PHP_SELF']) == "home.php" or basename($_SERVER['PHP_SELF']) == "film.php" or basename($_SERVER['PHP_SELF']) == "serie_tv.php" or basename($_SERVER['PHP_SELF']) == "nuovi_arrivi.php" or basename($_SERVER['PHP_SELF']) == "grandi_classici.php" or basename($_SERVER['PHP_SELF']) == "dnp.php") {
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
                        if (basename($_SERVER['PHP_SELF']) == "login.php") {
                            echo "<li class='header_menu_item' id='active'><a href='login.php'>Accedi</a></li>";
                        } else {
                            echo "<li class='header_menu_item'><a href='login.php'>Accedi</a></li>";
                        }
                        if (basename($_SERVER['PHP_SELF']) == "register.php") {
                            echo "<li class='header_menu_item' id='active'><a href='register.php'>Registrati</a></li>";
                        } else {
                            echo "<li class='header_menu_item'><a href='register.php'>Registrati</a></li>";
                        }
                        if (basename($_SERVER['PHP_SELF']) == "contact.php") {
                            echo "<li class='header_menu_item' id='active'><a href='contact.php'>Contattaci</a></li>";
                        } else {
                            echo "<li class='header_menu_item'><a href='contact.php'>Contattaci</a></li>";
                        }
                    }
                    elseif(basename($_SERVER['PHP_SELF']) == "scheda_film.php" or basename($_SERVER['PHP_SELF']) == "generi_serie.php" or basename($_SERVER['PHP_SELF']) == "generi_film.php") {
                        echo <<<EOD
                        <li class="header_menu_item"><a href="$origin.php">Torna indietro</a></li>
                        EOD;
                    }
                    else {
                        echo "<li class='header_menu_item'><a href='home.php'>Home</a></li>";
                    }
                ?>
        </ul>

    </div>    
</div>