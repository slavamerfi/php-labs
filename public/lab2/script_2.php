<!DOCTYPE html>
<html>
<head>
    <title>Порівняння чисел</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        input[type="text"] {
            padding: 5px;
            width: 150px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 5px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Порівняння чисел</h1>

<form method="post" action="">
    <label for="number1">Число 1:</label>
    <input type="text" id="number1" name="number1">
    <br><br>
    <label for="number2">Число 2:</label>
    <input type="text" id="number2" name="number2">
    <br><br>
    <input type="submit" value="Вивести більше число">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    if ($number1 > $number2) {
        echo "Більше число: $number1";
    } elseif ($number2 > $number1) {
        echo "Більше число: $number2";
    } else {
        echo "Обидва числа рівні: $number1";
    }
}
?>

</body>
</html>
