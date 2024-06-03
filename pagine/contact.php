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
            $email = $_POST['email'];
            $phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '' ;
            $commento = isset( $_POST['commento'] ) ? $_POST['commento'] : '' ;

            mysqli_query($conn,"INSERT INTO contatti(email,phone,commento) VALUES('$email','$phone','$commento')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Messaggio inviato!</p>
                  </div> <br>";
            echo "<a href='home.php'><button class='btn'>Home</button>";
         

         

         }else{
         
        ?>

            <header>Lasciaci una recensione</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="phone">Telefono</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="commento">Commento</label>
                    <input type="text" name="commento" id="commento" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Invia" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>