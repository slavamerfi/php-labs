<?php
$servername = "db";
$username = "root";
$password = "mypassword";
$dbname = "bohdanova_s_db";
$tablename = "Kor"; // 
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}

$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);

echo "<h1>Список усіх зареєстрованих користувачів:</h1>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. "<br>";
        echo "Логін: " . $row["login"]. "<br>";
        echo "Ім'я: " . $row["name"]. "<br>";
        echo "Дата народження: " . $row["birthday"]. "<br>";
        echo "Стать: " . $row["sex"]. "<br>";
        echo "Країна: " . $row["country"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Примітка: " . $row["note"]. "<br>";
        echo "<br>";
    }
} else {
    echo "Немає жодного користувача";
}

$conn->close();
?>