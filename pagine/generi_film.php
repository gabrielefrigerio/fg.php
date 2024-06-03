<?php
    if (!isset($_GET["genere"])) {
        die("Errore! impossibile caricare la pagina");
    } else {
        $genere = $_GET["genere"];
        require("../data/connessione_db.php");
    }
    
    session_start();
    $_SESSION['pre']= "film";
?>


<html>
    <head>
        <title>TFR | generi film</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <script src="../JAVA/script.js" defer></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>

    <body>
        <div class="contenitore-g">
            <header>
                <?php require('pezzi/nav.php') ?>
            </header>
            
            <div class="grid-immagini">
                <ul class="galleria">

                    <?php
                        $sql = "SELECT film.titolo 
						FROM film  
						WHERE film.genere='$genere' AND film.media = 'Film'";

                        $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
                        if ($ris->num_rows == 0) {
                            echo "<p style='text-align:center'>Nessuno";
                        }

                        foreach($ris as $film){
                            $titolo = $film['titolo'];
                            echo <<<EOD
                                <li class="card-item">
                                    <a href="#">
                                        <figure class="card">
                                            <img src="../immagini/Film/$genere/$titolo.jpg">
                                            <figcaption>$titolo</figcaption>
                                        </figure>
                                    </a>
                                </li>
                            EOD;
                        }
                    ?>
                </ul>
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