<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ./../"); // Redirigir a la página de inicio de sesión si no hay sesión activa
    exit(); // Asegurarse de que el resto del código no se ejecute si se redirige
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../assets/icons/PHP.png" type="image/x-icon">
    <link rel="stylesheet" href="./../style.css">
    <title>PHP - contact</title>
</head>

<body>
    <?php include("./../src/components/header.php"); ?>
    <main class="contactsContainer">
        <?php
        include("./../php/cargarContact.php");
        cargarContacto(); ?>
    </main>
</body>

</html>