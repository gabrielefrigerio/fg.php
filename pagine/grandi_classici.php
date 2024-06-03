<html>
    <head >
        <meta charset="UTF-8" />
        <title>TFR | I grandi classici</title>
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
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/Western/il buono il brutto e il cattivo.jpg">
                                <figcaption>Il buono il brutto e il cattivo</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/Film Drammatici/scarface-1983-poster.avif">
                                <figcaption>Scarface</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/Film D'avventura/2001.jpg">
                                <figcaption>2001</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/Western/per qualche dollaro in più.jpg">
                                <figcaption>per qualche dollaro in più</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/film Horror/The shining.jpg">
                                <figcaption>The shining</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../immagini/Film/Film Drammatici/la-dolce-vita-1960-poster.avif">
                                <figcaption>La dolce vita</figcaption>
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
            