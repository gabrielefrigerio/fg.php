<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleaccesso.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 

              include 'pezzi/back.php';
              include("../sql/db.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);

                $result = mysqli_query($conn,"SELECT * FROM utenti WHERE email='$email' AND password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['cognome'] = $row['cognome'];
                }else{
                    echo "<div class='message'>
                      <p>Password o Username errati</p>
                       </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Torna all'accesso</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: areaperso.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Non sei registrato? <a href="register.php">Registrati adesso</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>