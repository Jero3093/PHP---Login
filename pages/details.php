<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ./../");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../assets/icons/PHP.png" type="image/x-icon">
    <link rel="stylesheet" href="./../style.css">
    <title>PHP - Details</title>
</head>

<body>

    <?php
    include("./../src/components/header.php");

    include("./../database/database.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM `content` WHERE `id` = '$id'";
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die("Query Failed.");
        } else {
            $row = mysqli_fetch_array($result);
            echo '<div class="details_container">
                <div class="details_content">
                  <img src="' . $row['img_url'] . '" class="details_content-img" alt="content-img" />
                  <div>
                      <p class="details_content-title">' . $row['title'] . '</p>
                      <p class="details_content-text">' . $row['text'] . '</p>
                  </div>
                </div>
            </div>';
        }

        mysqli_close($conexion);
    } else {
        echo "ID de contenido no proporcionado.";
    }
    ?>

</body>

</html>