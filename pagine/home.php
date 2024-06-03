<?php
  session_start();
  $_SESSION['pre']= "home";
  if (isset($_POST["input"])) $input = $_POST["input"]; else $input = "";
?>
<html>
  <head >
    <meta charset="UTF-8" />
    <title>The Film Review.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="../CSS/style.css">
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
            <img class="image-item" src="../immagini/Film/Film D'azione/beekeeper.jpg"  />
            <img class="image-item" src="../immagini/Film/film Horror/il silenzio degli innocent i.jpg"  />
            <img class="image-item" src="../immagini/Film/Film Drammatici/c'era una volta ad hollywood.jpg"  />
            <img class="image-item" src="../immagini/Film/Film commedia/forrest gump.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/breaking bad.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie drammatiche/better call saul.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/Suburra_Vertical-Italian_RGB-1.avif"  />
            <img class="image-item" src="../immagini/Serie/Serie d'azione/gomorra.jpeg  "/>
            <img class="image-item" src="../immagini/Film/Film D'azione/fight club.jpg"  />
            <img class="image-item" src="../immagini/Film/Film Drammatici/the Iron claw.jpg"  />
            <img class="image-item" src="../immagini/Film/Film commedia/il gande lebowski.jpg"  />
            <img class="image-item" src="../immagini/Serie/Serie drammatiche/atlanta.jpg"  />
            <img class="image-item" src="../immagini/Film/Western/django.jpg"  />
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

      <form action="" method="post" class = "ricerca">
        <table class="tab_input">
            <tr>
                <td><label for="input">Input: </label></td>
                <td><input type="text" name="input" id="input" value = "<?php echo $input ?>"></td>
            </tr>
        </table>
        <input type="submit" value="Cerca">
      </form>

      <div class="container">
        <div class="movie-cards">
          <?php
            require("../data/connessione_db.php");
            $sql = "SELECT * FROM film WHERE titolo LIKE '%$input%' OR descrizione LIKE '%$input%'";
            $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
            //$main = [0,4,5,18, 24];
            foreach($ris as $riga){
              $film_id = $riga["id"];
              $titolo = $riga["titolo"];
              $descr_breve = $riga["descr_breve"];
              $voto = $riga["voto"];
              $durata = $riga["durata"];
              $genere = $riga["genere"];
              $anno = $riga["anno"];
              $media = $riga["media"];

              echo <<<EOD
                <div class="card">
                  <a href="scheda_film.php?film_id=$film_id">
                    <img src="../immagini/$media/$genere/$titolo.jpg"/>
                    <div class="content">
                      <h1 class="name">$titolo</h1>
                      <h3 class="infos">
                        $voto | $anno | $durata Min
                      </h3>
                      <p class="short-desc">
                        $descr_breve
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </a>
          </div>
                  
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