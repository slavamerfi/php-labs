<?php
$servername = "db";
$username = "root";
$password = "mypassword";
$dbname = "bohdanova_s_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}

$sql = "SELECT Notes.*, Comments.author, Comments.comment 
        FROM Notes 
        LEFT JOIN Comments ON Notes.id = Comments.Art_Id
        ORDER BY Notes.id ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID замітки: " . $row["id"]. "<br>";
        echo "Дата створення замітки: " . $row["created"]. "<br>";
        echo "Заголовок: " . $row["title"]. "<br>";
        echo "Вміст: " . $row["article"]. "<br>";
        echo "<strong>Коментарі:</strong><br>";
        if ($row["author"] !== null && $row["comment"] !== null) {
            echo "Автор коментаря: " . $row["author"]. "<br>";
            echo "Вміст коментаря: " . $row["comment"]. "<br>";
        } else {
            echo "Немає коментарів<br>";
        }
        echo "<br>";
    }
} else {
    echo "Немає жодної замітки";
}

$conn->close();
?>