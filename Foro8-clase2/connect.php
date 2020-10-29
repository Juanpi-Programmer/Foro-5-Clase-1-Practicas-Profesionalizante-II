<?php 
    $url = "localhost";
    $db = "juan_fernandez";

    $conn = new mysqli($url, "root", "", $db);

    if ($conn->connect_error) {
        echo $err -> $conn->connect_error;
    } else {
        // echo "Conexión Exitosa";
    }

?>