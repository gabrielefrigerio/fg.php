<html>
  <head >
    <meta charset="UTF-8" />
    <title>The Film Review.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="../CSS/styler.css">
    <script src="../JAVA/script.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <div class="contenitore-g">
      <header>
        <?php require('pezzi/nav.php') ?>
      </header>

      <div class="slide">
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded"> </button>
          <ul class="image-list">
            <img class="image-item" src="../immagini/Film/film_dazione/beekeeper.jpg"  />
            <img class="image-item" src="../immagini/Film/film_horror/il silenzio degli innocent i.jpg"  />
            <img class="image-item" src="../immagini/Film/film_drammatici/c'era una volta ad hollywood.jpg"  />
            <img class="image-item" src="../immagini/Film/film_commedia/forrest gump.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/breaking bad.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie drammatiche/better call saul.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/Suburra_Vertical-Italian_RGB-1.avif"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/gomorra.jpeg  "/>
            <img class="image-item" src="../immagini/Film/film_dazione/fight club.jpg"  />
            <img class="image-item" src="../immagini/Film/film_drammatici/the Iron claw.jpg"  />
            <img class="image-item" src="../immagini/Film/film_commedia/il gande lebowski.jpg"  />
            <img class="image-item" src="../immagini/Film/film_drammatici/joker.jpg"  />
            <img class="image-item" src="../immagini/Film/film_drammatici/oppenheimer.jpg"  />
            <img class="image-item" src="../immagini/Film/film_dazione/bullet train.jpg"  />
            <img class="image-item" src="../immagini/Film/film_dazione/mad max.jpg"  />
            <img class="image-item" src="../immagini/Film/film_horror/the whale.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie drammatiche/atlanta.jpg"  />
            <img class="image-item" src="../immagini/Serie/Animazione per adulti/Habin Hotel.jpg"  />
            <img class="image-item" src="../immagini/Film/film_western/django.jpg"  />
          </ul>
          <button id="next-slide" class="slide-button material-symbols-rounded"> </button>
        </div>
        <div class="slider-scrollbar">
          <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
          </div>
        </div>
      </div>

      <h1>I <span></span> Preferiti</h1>
      <div class="container">
        <div class="movie-cards">
          <?php
            $preferiti = [0,4,5,0];
            $i = 1;
            
            foreach($preferiti as $cod_film){
              require("../data/connessione_db.php");
              $sql = "SELECT film.cod_film, film.titolo, film.genere, film.descr_breve, film.voto, film.durata, film.data
                FROM film  
                WHERE cod_film = $cod_film";
              $ris = $conn->query($sql) or die("<p>Query fallita!</p>");

              $riga = $ris->fetch_assoc();
              $i = $i +1;
              $titolo = $riga['titolo'];
              $descr_breve = $riga['descr_breve'];
              $voto = $riga["voto"];
              $durata = $riga["durata"];
              $genere = $riga["genere"];
              $data = $riga["data"];

              echo <<<EOD
                <div class="card">
                  <a href="scheda_film.php?cod_film=$cod_film">
                    <img src="../immagini/Film/$genere/$titolo.jpg" alt="poster$i" />
                    <div class="content">
                      <h1 class="name">$titolo</h1>
                      <h3 class="infos">
                        <i class="fa-solid fa-star"></i> $voto | $data | $durata Min
                      </h3>
                      <p class="short-desc">
                        $descr_breve
                      </p>
                      <div class="icons">
                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                        <a href="#"><i class="fa-solid fa-bookmark"></i></a>
                        <a href="#"><i class="fa-solid fa-share"></i></a>
                      </div>
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