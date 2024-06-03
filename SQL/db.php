<?php 
    $conn = new mysqli("localhost", "root", "","film-real", "3307");
    if($conn->connect_error){
        die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
    }
?>