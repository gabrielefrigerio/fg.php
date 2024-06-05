<html>
    <head>
        <meta charset="UTF-8" />
        <title>TFR | Preferiti</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="../CSS/styleaccesso.css">
        <script src="../JAVA/script.js" defer></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    </head>
    <body>
        <div class="contenitore-g">
            <div class="container">
                <div class="movie-cards">
                    <?php
                        require("../data/connessione_db.php");
                        $sql = "SELECT film.id, film.titolo, film.genere, film.media, film.descr_breve, film.voto, film.durata, film.anno
                              FROM film JOIN preferiti ON preferiti.id_film = film.id
                              JOIN utenti ON utenti.id = preferiti.id_utente
                              WHERE utenti.id = 7";

                        $preferiti = $conn->query($sql) or die("<p>Query fallita!</p>");
                        foreach($preferiti as $film){
                            $titolo = $film['titolo'];
                            $media = $film['media'];
                            $genere = $film["genere"];
                            $descr_breve = $film['descr_breve'];
                            $voto = $film["voto"];
                            $durata = $film["durata"];
                            $anno = $film["anno"];
                            $film_id = $film["id"];

                            echo <<<EOD
                                <div class="card">
                                    <a href="scheda_film.php?film_id=$film_id">
                                        <img src="../immagini/$media/$genere/$titolo.jpg"/>
                                        <div class="content">
                                        <h1 class="name">$titolo</h1>
                                        <h3 class="infos">
                                            <i class="fa-solid fa-star"></i> $voto | $anno | $durata Min
                                        </h3>
                                        <p class="short-desc">
                                            $descr_breve
                                        </p>
                                        </div>
                                    </a>
                                </div>
                            EOD;
                        }
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <?php require('pezzi/footer.php') ?>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
            $(".header_bar").click(function(e){
            $(".header_menu").toggleClass('is-open');
            e.preventDefault();
            });
        });
        </script>
    </body>
</html>
