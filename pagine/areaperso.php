<?php 
   session_start();
   include("../sql/db.php");
   if(!isset($_SESSION['valid'])){
   header("Location: home.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleaccesso.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($conn,"SELECT*FROM utenti WHERE id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['username'];
                $res_Email = $result['email'];
                $res_id = $result['id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Cambia account</a>";
            ?>
            <a href="home.php"> <button class="btn">Torna alla home</button> </a>
            <a href="pezzi/logout.php"> <button class="btn">Log Out</button> </a>
            

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Ciao <b><?php echo $res_Uname ?></b>, Benvenuto</p>
            </div>
            <div class="box">
                <p>La tua email <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                 
            </div>
          </div>
       </div>

    </main>
</body>
</html>