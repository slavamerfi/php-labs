<!DOCTYPE html>
<html>
<head>
    <title>Перевірити чи зареєстрований</title>
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
        input[type="password"] {
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

<h1>Перевірити чи зареєстрований</h1>

<form method="post" action="">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login">
    <br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Перевіримо">
</form>

<br>
(PS user1 => pass1)
<br><br><br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registeredUsers = array(
        "user1" => "pass1",
        "user2" => "pass2",
        "user3" => "pass3",
        "user4" => "pass4"
    );

    $inputLogin = $_POST["login"];
    $inputPassword = $_POST["password"];

    if (array_key_exists($inputLogin, $registeredUsers)) {
        if ($registeredUsers[$inputLogin] === $inputPassword) {
            switch ($inputLogin) {
                case 'user1':
                    echo "Доброго Дня, Хорошун Андрій Сергійович";
                    break;
                case 'user2':
                    echo "Доброго Дня, Богданова Софія Михайлівна";
                    break;
                case 'user3':
                    echo "Доброго Дня, Сікорський Максим Андрійович";
                    break;
                case 'user4':
                    echo "Доброго Дня, Голобородько Антон Сергійович";
                    break;
            }
        } else {
            echo "Вибачте, пароль неправильний для введеного логіну.";
        }
    } else {
        echo "Вибачте, ви у нас не зареєстровані.";
    }
}
?>

</body>
</html>
