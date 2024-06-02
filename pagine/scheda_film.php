<?php
    if (!isset($_GET["cod_film"])) {
        die("Errore! manca un parametro essenziale per il caricamento del libro!");
    } else {
        $cod_film = $_GET["cod_film"];
        require("../data/connessione_db.php");
        $sql = "SELECT film.cod_film, film.titolo, film.genere, film.descrizione_txt, film.regista, film.durata, film.lingua, film.settings, film.casa_produttrice, film.trailer
                FROM film  
                WHERE cod_film = $cod_film"; 
        $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
        if ($ris->num_rows == 0) {
            die ("Film non trovato!");
        } else {
            $riga = $ris->fetch_assoc();
            $titolo = $riga['titolo'];
            $descrizione_txt = $riga['descrizione_txt'];
            $regista = $riga["regista"];
            $durata = $riga["durata"];
            $genere = $riga["genere"];
            $lingua = $riga["lingua"];
            $settings = $riga["settings"];
            $casa_produttrice = $riga["casa_produttrice"];
            $trailer = $riga["trailer"];
        }
    }
?>

<html>
    <head >
        <meta charset="UTF-8" />
        <title>Dune</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="../CSS/styleFilm.css">
        <script src="../JAVA/script.js" defer></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    </head>
    <body>
        <div class="contenitore-g">
            <header>
                <?php require('pezzi/nav.php') ?>
            </header>

            <?php
                echo <<<EOD
                    <div class="container-film">
                        <div class="titolo"><h1>$titolo</h1></div>
                        <div class="rating">
                            <input type="radio" name="rating" id="r1">
                            <label for="r1"></label>
                            <input type="radio" name="rating" id="r2">
                            <label for="r2"></label>
                            <input type="radio" name="rating" id="r3">
                            <label for="r3"></label>
                            <input type="radio" name="rating" id="r4">
                            <label for="r4"></label>
                            <input type="radio" name="rating" id="r5">
                            <label for="r5"></label>
                        </div>
                        <div class="riassunto"><h1>Riassunto</h1>
                            <p>$descrizione_txt
                                </p>
                        </div>
                        <div class="caratteristiche">
                            <h2>Genere:</h2><p>$genere</p>
                            <h2>Durata:</h2><p>$durata min</p>
                            <h2>Regista:</h2><p>$regista</p>
                            <h2>Settings:</h2><p>$settings</p>
                            <h2>Casa produttrice:</h2><p>$casa_produttrice</p>
                            <h2>Lingua originale:</h2><p>$lingua</p>
                        </div>
                        <div class="image"><img src="../immagini/Film/$genere/$titolo.jpg"></div>
                        <a target="_blank" href="$trailer" rel="noopener" id="trail">
                            <div class="trailer">
                            Trailer
                            </div>
                        </a>
                    </div>
                EOD;
            ?>
        </div>

        <footer>
            <?php require('pezzi/footer.php') ?>
        </footer>
    </body>
</html>