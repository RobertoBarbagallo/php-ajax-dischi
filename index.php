<?php

include __DIR__ . "/./db/database.php";

function render($list)
{
    foreach ($list as $element) {
        echo '<div class="card" >';

        echo '<div class="card-header" >';
        echo "<h2>" . $element["titolo"] . "</h2>";
        echo "<img src='img/" . $element["copertina"] . " '>";
        echo "</div>";
        
        echo '<div class="card-par" >';
        echo "<h5>" . $element["artista"] . "</h5>";
        echo "<p>" . $element["anno"] . "</p>";
        echo "</div>";
        echo '<div class="card-link" >';
        echo $element["daYoutube"];
        echo "</div>";
        echo "</div>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">


            <?php

            render($albums)


            ?>
    </div>

</body>

</html>