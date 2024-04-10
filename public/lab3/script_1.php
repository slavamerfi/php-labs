<!DOCTYPE html>
<html>
<head>
    <title>Масив довільних чисел</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Масив довільних чисел</h1>

<?php
    $numbers = [7, 3, 5, 2, 1];

    foreach ($numbers as $number) {
        echo "$number^2=" . ($number ** 2) . "<br>";
    }
?>


</body>
</html>