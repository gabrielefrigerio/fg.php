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
            <?php
              require("../data/connessione_db.php");
              $sql = "SELECT film.genere, film.titolo, film.media
                      FROM film  
                      WHERE copertina = TRUE"; 
              $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
              foreach($ris as $film){
                $media = $film['media'];
                $titolo = $film['titolo'];
                $genere = $film['genere'];
                echo <<<EOD
                  <p>$media, $genere, $titolo </p>
                  <img class="image-item" src="../immagini/$media/$genere/$titolo.jpg"/>
                EOD;
              }
              
            ?>
          </ul>
          <button id="next-slide" class="slide-button material-symbols-rounded"> </button>
        </div>
        <div class="slider-scrollbar">
          <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
          </div>
        </div>
      </div>
      <a href="preferiti.php">preferiti</a>
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