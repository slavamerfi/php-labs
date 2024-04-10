<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Введення даних</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"] {
            padding: 5px;
            margin: 5px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        table td, table th {
            padding: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Введення даних</h1>
    <form action="" method="post">
        <label for="surname">Прізвище:</label><br>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">Ім'я:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="age">Вік:</label><br>
        <input type="number" id="age" name="age" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Готово">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["surname"]) || empty($_POST["name"]) || empty($_POST["age"]) || empty($_POST["email"])) {
                echo "Будь ласка, заповніть всі поля!";
            } else {
                $userData = array(
                    "Прізвище" => $_POST["surname"],
                    "Ім'я" => $_POST["name"],
                    "Вік" => $_POST["age"],
                    "Email" => $_POST["email"]
                );

                echo "<table>";
                foreach ($userData as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>
