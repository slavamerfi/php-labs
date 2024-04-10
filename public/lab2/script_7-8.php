<!DOCTYPE html>
<html>
<head>
    <title>Вгадайте число</title>
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

<h1>Вгадайте число</h1>

<form method="post" action="">
    <label for="guess">Введіть число:</label>
    <input type="text" id="guess" name="guess">
    <br><br>
    <input type="submit" value="Вгадати">
</form>

<br>


<?php
$secretNumber = 15;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guessNumber = $_POST["guess"];

    if ($guessNumber == $secretNumber) {
        echo "<p class='correct'>ПРАВИЛЬНО!</p>";
    } elseif ($guessNumber < $secretNumber) {
        echo "<p>Загадане число БІЛЬШЕ $guessNumber</p>";
        echo "<p>Спробуйте ще раз!</p>";
    } else {
        echo "<p>Загадане число МЕНШЕ $guessNumber</p>";
        echo "<p>Спробуйте ще раз!</p>";
    }
}
?>

</body>
</html>
