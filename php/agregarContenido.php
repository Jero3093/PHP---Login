<?php
include("./../database/database.php");

$imgURL = "https://picsum.photos/200/300";

$title = $_POST['title'];
$textContent = $_POST['content'];

if (!empty($textContent) || !empty($title)) {
    try {
        $query = "INSERT INTO content (title, img_url, text) VALUES ('$title', '$imgURL', '$textContent')";

        $respone = mysqli_query($conexion, $query);

        echo 'Datos cargados y registrados';

        header("location: ./../");
    } catch (\Throwable $th) {
        throw $th;
    }


    mysqli_close($conexion);
} else {
    echo 'No se ah ingresado ningun dato';
}
