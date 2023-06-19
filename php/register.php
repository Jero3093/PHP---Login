<?php
session_start();
include("../database/database.php"); //MYSQL Database

$name = $_POST['name']; //Name
$email = $_POST["email"]; //Email
$password = $_POST["password"]; //Password

if (empty($name) || empty($email) || empty($password)) {
    echo 'Rellena el formulario para continuar';
} else {
    $queryregister = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')"; //Insert New User Query

    $queryConsultaUsuario = "SELECT * FROM signup WHERE email = '$email'"; //Check Email Address if already exists 

    $comprobarUsuario = mysqli_query($conexion, $queryConsultaUsuario); //Check Email

    $datosUsuario = mysqli_fetch_array($comprobarUsuario); //Check Email Data

    if ($datosUsuario['email'] == $email) {
        echo 'This email address is already in use. Please re-enter your email address and try again.';
    } else {
        $_SESSION["email"] = $email; //Save Email in Session Variable
        $insertar = mysqli_query($conexion, $queryregister); //User Insert Data

        echo 'Datos cargados y registrados';

        header('location: ./../pages/home.php'); //Redirect to home page when the user is correct
    }



    mysqli_close($conexion); //Close the connection to the server
}
