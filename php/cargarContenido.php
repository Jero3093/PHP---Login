<?php
function cargarContenido()
{
    include("./../database/database.php");

    $query = "SELECT * FROM `content`";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed.");
    } else {
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="card_content">
                <img src="' . $row['img_url'] . '" class="card_content-img" alt="content-img" />
                <p class="card_content-text">' . $row['text'] . '</p>
            </div>';
        }
    };
}
