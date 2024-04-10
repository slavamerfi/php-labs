<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            padding: 5px;
            width: 200px;
            margin-bottom: 10px;
        }
        select {
            padding: 5px;
            width: 200px;
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
    <h2>Вхід</h2>
    <form action="" method="post">
        <label for="login">Логін:</label><br>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="mode">Режим:</label><br>
        <select id="mode" name="mode">
            <option value="login">Вхід</option>
            <option value="register">Реєстрація</option>
        </select><br><br>
        <input type="submit" value="Виконати">
    </form>
    <br>
    
    <?php
        $userLogin = isset($_POST['login']) ? $_POST['login'] : null;
        $userPassword = isset($_POST['password']) ? $_POST['password'] : null;
        $mode = isset($_POST['mode']) ? $_POST['mode'] : null;

        function checkUserExists($login) {
            return file_exists("$login.txt");
        }

        function checkPassword($login, $password) {
            $fileContent = file_get_contents("$login.txt");
            return trim($fileContent) === $password;
        }

        if ($mode === 'login') {
            if (checkUserExists($userLogin)) {
                if (checkPassword($userLogin, $userPassword)) {
                    echo "Доброго дня, $userLogin!";
                } else {
                    echo "Пароль неправильний!";
                }
            } else {
                echo "Такого користувача не зареєстровано!";
            }
        } elseif ($mode === 'register') {
            if (!checkUserExists($userLogin)) {
                file_put_contents("$userLogin.txt", $userPassword);
                echo "Ви успішно зареєстровані!";
            } else {
                echo "Такий логін вже зайнятий. Будь ласка, виберіть інший.";
            }
        }
    ?>

</body>
</html>
