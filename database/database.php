<?php 
    $database = "register-php";

    $conexion = mysqli_connect("localhost", "root", "", $database);

    if (!$conexion) {
        echo "Database connection failed";
    }
