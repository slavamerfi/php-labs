<!DOCTYPE html>
<html>
<head>
    <title>Об'єднання масивів</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Об'єднання масивів</h1>

<?php

    $squares = [];
    for ($i = 10; $i <= 20; $i++) {
        $squares[] = $i * $i;
    }

    $cubes = [];
    for ($j = 1; $j <= 10; $j++) {
        $cubes[] = $j ** 3;
    }

    $merged_array = array_merge($squares, $cubes);

    echo "<div style='display: inline-block; width: 15%; margin-right: 5%; text-align: left;'>";
    echo "<h2>Квадрати:</h2>";
    foreach ($squares as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "</div>";

    echo "<div style='display: inline-block; width: 15%; text-align: top;'>";
    echo "<h2>Куби:</h2>";
    foreach ($cubes as $key => $value) {
        echo "$key: $value <br>";
    }
    
    echo "</div>";


    echo " <br> <div style='width: 12%; margin: 0 auto; text-align: left;'> <h2>Об'єднання:</h2> ";
    foreach ($merged_array as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "</div>";

?>
</body>
</html>