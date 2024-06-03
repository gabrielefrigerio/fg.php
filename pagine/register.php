<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleaccesso.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         include 'pezzi/back.php';
         include("../sql/db.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nome = isset( $_POST['nome'] ) ? $_POST['nome'] : '' ;
            $cognome = isset( $_POST['cognome'] ) ? $_POST['cognome'] : '' ;
            
            

         

         $verify_query = mysqli_query($conn,"SELECT email FROM utenti WHERE email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>Email già in uso! Prova con un'altra</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Torna alla pagina</button>";
         }
         else{

            mysqli_query($conn,"INSERT INTO utenti(username,email,password,nome,cognome) VALUES('$username','$email','$password','$nome','$cognome')") or die("Errore");

            echo "<div class='message'>
                      <p>Registrazione avvenuta!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Accedi</button>";
         

         }

         }else{
         
        ?>

            <header>Registrati</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="nome">Nome</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Già registrato? <a href="login.php">Accedi</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>