<?php

class User
{
    public $surname;
    public $name;
    public $age;
    public $email;

    public function __construct($surname, $name, $age, $email)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function displayInfo()
    {
        echo "<div style='margin: 0 auto; width: 20%; text-align: left; font-family: Arial, sans-serif;'><h2>Інформація користувача</h2>";
        echo "<p><strong>Прізвище:</strong> {$this->surname}</p>";
        echo "<p><strong>Ім'я:</strong> {$this->name}</p>";
        echo "<p><strong>Вік:</strong> {$this->age}</p>";
        echo "<p><strong>Email:</strong> {$this->email}</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin: 0 auto;
            width: 50%;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"] {
            padding: 5px;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
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
    <h2>Реєстрація</h2>
    <form action="" method="post">
        <label for="surname">Прізвище:</label>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="age">Вік:</label>
        <input type="number" id="age" name="age" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Готово">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $surname = $_POST["surname"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];

        $user = new User($surname, $name, $age, $email);
        $user->displayInfo();
    }
    ?>
</body>
</html>
