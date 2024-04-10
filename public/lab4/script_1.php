<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка наявності файлу</title>
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
        input[type="text"] {
            padding: 5px;
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
        .file-info {
            margin-top: 20px;
            text-align: center;
        }
        .file-info pre {
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h1>Перевірка наявності файлу</h1>
    <form action="" method="post">
        <label for="filename">Введіть ім'я файлу (разом з розширенням):</label><br>
        <input type="text" id="filename" name="filename" required><br><br>
        <input type="submit" value="Перевірити">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filenameInput = $_POST["filename"];
            
            if (file_exists($filenameInput)) {
                echo "<div class='file-info'>";
                echo "Файл із іменем $filenameInput в поточному каталозі існує.<br><br>";
                echo "Розмір файлу: " . filesize($filenameInput) . " байт<br>";
                echo "Дата створення: " . date("Y-m-d H:i:s", filectime($filenameInput)) . "<br>";
                echo "Дата останньої модифікації: " . date("Y-m-d H:i:s", filemtime($filenameInput)) . "<br>";
                echo "Вміст файлу:<br>";
                echo "<pre>" . htmlspecialchars(file_get_contents($filenameInput)) . "</pre>";
                echo "</div>";
            } else {
                echo "<br>Файл із іменем $filenameInput в поточному каталозі не існує.";
            }
        }
    ?>

</body>
</html>