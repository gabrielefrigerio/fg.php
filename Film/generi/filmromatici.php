<html>
    <head >
        <title>Film romantici</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="../../CSS/style.css">
        <script src="../../JAVA/script.js" defer></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    </head>
    <body>
        <div class="contenitore-g">
            <header>
                <?php require('../../pagine/pezzi/nav.php') ?>
            </header>

            </header>
            <div class="grid-immagini">
                <ul class="galleria">
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../../immagini/Film/Film Romantici/la la land.jpg">
                                <figcaption>La La Land</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../../immagini/Film/Film Romantici/slatburn.jpg">
                                <figcaption>Saltburn</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="card-item">
                        <a href="#">
                            <figure class="card">
                                <img src="../../immagini/Film/Film Romantici/grease.jpg">
                                <figcaption>Grease</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <footer>
            <div class="footer"><br>&copy; 2024 </br>
              <br> Lavoro realizzato da Brambillasca Davide e Contini Federico</br>  
              <br> The Film Review All rights reserved.</br></div>
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