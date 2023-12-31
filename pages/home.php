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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../assets/icons/PHP.png" type="image/x-icon">
    <link rel="stylesheet" href="./../style.css">
    <title>PHP - Home</title>
</head>

<body>
    <?php
    include("./../src/components/header.php");
    ?>
    <main class="content_grid">
        <?php
        include("./../php/cargarContenido.php");
        cargarContenido();
        ?>
    </main>

    <a href="./newContent.php" class="AddButton">
        <div class="line1"></div>
        <div class="line2"></div>
    </a>

    <!--JS-->
    <script src="./../js/content.js"></script>
</body>

</html>