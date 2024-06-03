<?php
if(isset($_POST["submit1"])) {
    header("location:home.php");
}
?>
<html>
    <body>
        <form name="form1" action="" method="post">
        <input type="submit" name="submit1" value="Torna alla home">    

        </form>
    </body>
</html>