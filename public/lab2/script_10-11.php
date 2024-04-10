<!DOCTYPE html>
<html>
<head>
    <title>Відношення числа 10 до діапазону</title>
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

<h1>Відношення числа 10 до діапазону</h1>

<form method="post" action="">
    <label for="number1">Введіть перше число діапазону:</label>
    <input type="number" id="number1" name="number1">
    <br><br>
    <label for="number2">Введіть друге число діапазону:</label>
    <input type="number" id="number2" name="number2">
    <br><br>
    <input type="submit" value="Показати таблицю відношень">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_range = min($_POST["number1"], $_POST["number2"]);
    $end_range = max($_POST["number1"], $_POST["number2"]);
    
    echo "<table border='1'>";
    for ($i = $start_range; $i <= $end_range; $i++) {
        if ($i == 0) {
            echo "<p>Ділення на 0 відбулося. Цикл припинено.</p>";
            break;
        }
        echo "<tr>";
        echo "<td>10 / $i</td>";
        echo "<td>=</td>";
        echo "<td>" . (10 / $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
