<!DOCTYPE html>
<html>
<head>
    <title>Вгадай число</title>
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

    <script type="text/javascript">
        function showAlert(message) {
            alert(message);
        }
    </script>
    
</head>
<body>

<h1>Вгадай число</h1>

<form method="post" action="">
    <label for="guess">Введіть число:</label>
    <input type="number" id="guess" name="guess">
    <input type="submit" value="Вгадати">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretNumber = 15;
    $guessNumber = $_POST["guess"];

    if ($guessNumber == $secretNumber) {
        echo "<script>showAlert('Вгадали!');</script>";
    } elseif ($guessNumber < $secretNumber) {
        echo "<script>showAlert('Не вгадали!');</script>";
        echo "<script>showAlert('Загадане число більше.');</script>";
    } else {
        echo "<script>showAlert('Не вгадали!');</script>";
        echo "<script>showAlert('Загадане число менше.');</script>";
    }
}
?>

</body>
</html>
