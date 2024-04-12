<!DOCTYPE html>
<html>
<head>
    <title>Створення нового коментаря</title>
</head>
<body>
    <h2>Створення нового коментаря</h2>
    <form action="comment.php" method="post">
        Автор: <input type="text" name="author"><br>
        Коментар: <textarea name="comment"></textarea><br>
        Замітка ID: <input type="text" name="art_id"><br>
        <input type="submit" value="Додати коментар">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "db";
            $username = "root";
            $password = "mypassword";
            $dbname = "bohdanova_s_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Помилка з'єднання: " . $conn->connect_error);
            }

            $author = $_POST['author'];
            $comment = $_POST['comment'];
            $art_id = $_POST['art_id'];

            $sql = "INSERT INTO Comments (created, author, comment, Art_Id) VALUES (NOW(), '$author', '$comment', '$art_id')";

            if ($conn->query($sql) === TRUE) {
                echo "Коментар успішно доданий";
            } else {
                echo "Помилка: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    ?>
</body>
</html>