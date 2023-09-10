<?php
    $mysqli = new mysqli('localhost', 'root', 'mysql', 'DBUniversidad');
    if (mysqli_connect_errno()){
            echo ('No pudo conectarse: ' . mysqli_connect_error());
    }
    else{
            echo ('Conectado satisfactoriamente');
    }
    mysqli_close($mysqli);
?>