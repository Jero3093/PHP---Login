<?php
function cargarContacto()
{
    include("./../database/database.php");

    $query = "SELECT * FROM contact";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed.");
    } else {
        while ($row = mysqli_fetch_array($result)) {
            echo '<a href="' . $row["url"] . '" class="contactCard" target="_blank">
                    <div class="contactCard__content">
                        <img src="' . $row["icon_url"] . '" alt="contact1" class="contactCard__image" loading="lazy">
                        <div class="contactCard__info">
                            <h3 class="contactCard__info--name">' . $row["name"] . '</h3>
                        </div>
                    </div>
                    <img src="./../assets/icons/arrow.png" alt="arrow" class="contactCard__icon" loading="lazy">
                </a>';
        }
    }
    mysqli_close($conexion);
}
