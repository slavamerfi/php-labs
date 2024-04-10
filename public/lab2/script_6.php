<!DOCTYPE html>
<html>
<head>
    <title>Перевірити чи число ціле</title>
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

<h1>Перевірити чи число ціле</h1>

<form method="post" action="">
    <label for="number">Число:</label>
    <input type="text" id="number" name="number">
    <br><br>
    <input type="submit" value="Перевірити, чи ціле число">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if (ctype_digit($number)) {
        echo "Введено ціле число - $number.";
    } else {
        echo "Введено НЕ ціле число - $number.";
    }
}
?>

</body>
</html>
