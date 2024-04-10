<!DOCTYPE html>
<html>
<head>
    <title>Таблиця Країн</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            text-align: center;
            margin: 0 auto; /* Центрування таблиці */
            border-collapse: collapse;
        }
        h1 {
            text-align: center;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>

<h1>Таблиця Країн</h1>

<?php

    $countries = array(
        "Іспанія" => array("Населення" => 47780000, "Столиця" => "Мадрид"),
        "Німеччина" => array("Населення" => 83820000, "Столиця" => "Берлін"),
        "Франція" => array("Населення" => 67973511, "Столиця" => "Париж"),
    );

    echo "<table border='1'>";
    foreach ($countries as $country => $info) {
        echo "<tr><td>$country</td><td>" . $info['Населення'] . ", " . $info['Столиця'] . "</td></tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table border='1'>";

    echo "<tr>";
    foreach ($countries as $country => $info) {
        echo "<td>$country</td>";
    }
    echo "</tr>";

    echo "<tr>";
    foreach ($countries as $country => $info) {
        echo "<td>" . $info['Населення'] . ", " . $info['Столиця'] . "</td>";
    }
    
    echo "</tr>";
    echo "</table>";

?>



</body>
</html>