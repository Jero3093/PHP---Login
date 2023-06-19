<?php
session_start();
include("../database/database.php");

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo 'Please enter your email address and password to continue';
} else {
    $queryConsultaUsuario = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";

    $resultadoConsulta = mysqli_query($conexion, $queryConsultaUsuario);

    if ($resultadoConsulta && mysqli_num_rows($resultadoConsulta) > 0) {
        $_SESSION['email'] = $email; // Guardar el correo electrónico en la sesión
        header("location: ./../pages/home.php");
    } else {
        echo 'User does not exist or incorrect password, please try again';
    }

    mysqli_close($conexion);
}
