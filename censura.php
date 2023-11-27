<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $paragrafo = $_GET["paragraph"];
        $parola = $_GET["censura"];


        echo "<h2>Paragrafo originale</h2>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza del paragrafo originale: " . strlen($paragrafo) . "</p>";

        $paragrafoCensurato = str_ireplace($parola, "***", $paragrafo);

        echo "<h2>Paragrafo censurato</h2>";
        echo "<p>$paragrafoCensurato</p>";
        echo "<p>Lunghezza: " . strlen($paragrafoCensurato) . "<p>";
    ?>

</body>
</html>