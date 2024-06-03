<html>
    <head >
        <meta charset="UTF-8" />
        <title>TFR | Serie Tv</title>
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
                        <a href="../Serie Tv/animazione per adulti/animazione per adulti.html">
                            <figure class="card">
                                <img src="../immagini/Serie/Animazione per adulti.png">
                                <figcaption>Animazione per adulti</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Serie Tv/serie d'azione/seried'azione.html">
                            <figure class="card">
                                <img src="../immagini/Serie/Serie d'azione.png">
                                <figcaption>Serie d' azione</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Serie Tv/serie d'avventura/seried'avventura.html">
                            <figure class="card">
                                <img src="../immagini/Serie/Serie d'avventura.png">
                                <figcaption>Serie d'avventura</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="../Serie Tv/serie drammatiche/seriedrammatiche.html">
                            <figure class="card">
                                <img src="../immagini/Serie/Serie drammatiche.png">
                                <figcaption>Serie drammatiche</figcaption>
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
            