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
    <link rel="stylesheet" href="./../style.css">
    <link rel="shortcut icon" href="./../assets/icons/PHP.png" type="image/x-icon">
    <title>PHP - New Content</title>
</head>

<body>
    <?php include("./../src/components/header.php") ?>


    <form action="./../php/agregarContenido.php" method="post" class="NewContentForm">
        <h1 class="NewContentForm-title">Add New Content</h1>

        <div class="NewContentForm-input_container">
            <label for="content" class="NewContentForm-label">Title: (max. 100)</label>
            <input type="text" name="title" id="title" maxlength="100" class="NewContentForm-input" autocomplete="off" />
        </div>

        <div class="NewContentForm-input_container">
            <label for="content" class="NewContentForm-label">Content: (max. 300)</label>
            <textarea type="text" name="content" id="content" maxlength="300" class="NewContentForm-area" autocomplete="off"></textarea>
        </div>

        <input type="submit" value="Add" class="NewContentForm-submit">
    </form>

</body>

</html>