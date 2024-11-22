<?php
    $conexion = mysqli_connect("localhost", "root", "", "sichf");

    // Check connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
