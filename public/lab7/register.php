<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "db";
    $username = "root";
    $password = "mypassword";
    $dbname = "bohdanova_s_db";
    $tablename = "Kor"; // Назва вашої таблиці

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Помилка з'єднання: " . $conn->connect_error);
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $note = $_POST['note'];

    // Запит на вставку даних в таблицю
    $sql = "INSERT INTO $tablename (login, password, name, birthday, sex, country, email, note) 
            VALUES ('$login', '$password', '$name', '$birthday', '$gender', '$country', '$email', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "Дані успішно збережені";
    } else {
        echo "Помилка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма реєстрації</title>
</head>
<body>
    <h2>Форма реєстрації</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Логін: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        Ім'я: <input type="text" name="name"><br>
        Дата народження: <input type="date" name="birthdate"><br>
        Стать: 
        <select name="gender">
            <option value="male">Чоловіча</option>
            <option value="female">Жіноча</option>
        </select><br>
        Країна: <input type="text" name="country"><br>
        Email: <input type="email" name="email"><br>
        Примітка: <textarea name="note"></textarea><br>
        <input type="submit" value="Зареєструватися">
    </form>
</body>
</html>