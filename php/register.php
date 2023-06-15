<?php
include("../database/database.php");

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email) || empty($password)) {
    echo 'Rellena el formulario para continuar';
} else {
    $queryregister = "INSERT INTO signup (email, password) VALUES ('$email', '$password')";

    $insertar = mysqli_query($conexion, $queryregister);

    echo 'Datos cargados';

    header('location: ./../pages/home.php');

    mysqli_close($conexion);
}
