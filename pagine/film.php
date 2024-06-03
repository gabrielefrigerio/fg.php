<html>
    <head >
        <meta charset="UTF-8" />
        <title>TFR | Film</title>
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
                    <li class="card-item">
                        <a href="../Film/generi/filmd'avventura.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film Avventura.png">
                                <figcaption>Film d'avventura</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/Horror.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film Horror.png">
                                <figcaption>Horror</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/filmdazione.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film azione.png">
                                <figcaption>Film d'azione</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/western.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film western.png">
                                <figcaption>Western</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/filmdrammatici.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film Drammatici.png">
                                <figcaption>Film Drammatici</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/filmromatici.php">
                            <figure class="card">
                                <img src="../immagini/Film/Film romantici.png">
                                <figcaption>Romantici</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Film/generi/filmcommedie.php">
                            <figure class="card">
                                <img src="../immagini/Film/Commedie.png">
                                <figcaption>Commedie</figcaption>
                            </figure>
                        </a>
                    </li>
                
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
            