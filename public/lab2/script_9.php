<!DOCTYPE html>
<html>
<head>
    <title>Таблиця множення</title>
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
        form {
            text-align: center;
        }
        input[type="number"] {
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
        td {
            padding: 10px;
        }
    </style>
</head>
<body>

<h1>Таблиця множення</h1>

<form method="post" action="">
    <label for="number">Введіть число:</label>
    <input type="number" id="number" name="number" min="1">
    <input type="submit" value="Показати таблицю множення">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        // Вибираємо колір для кожного рядка
        $color = "#" . substr(md5($i), 0, 6);       
        echo "<tr style='background-color: $color;'>";
        echo "<td>$number x $i</td>";
        echo "<td>=</td>";
        echo "<td>" . ($number * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
