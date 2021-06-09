<?php  

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