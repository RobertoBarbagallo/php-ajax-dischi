<?php

include __DIR__ . "/./db/database.php";
include __DIR__ . "/./utilities/render.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>My Favourite Albums</title>
</head>

<body>
    <div class="container">


            <?php

            render($albums)


            ?>
    </div>

</body>

</html>