<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зчитування файлу</title>
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
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Зчитування з файлу</h1>
<?php
    $file_path = "tag_file.txt";

    $file_content = file($file_path, FILE_IGNORE_NEW_LINES);

    $tag_count = 0;

    echo "<table border='1'>";
    echo "<tr><th>Тег</th><th>Опис</th></tr>";

    $isTagRow = true;

    foreach ($file_content as $line) {
        $line = trim($line);
    
        if ($isTagRow) {
            $tag = htmlspecialchars($line);
            $isTagRow = false;
        } else {
            $description = htmlspecialchars($line);
            echo "<tr><td>$tag</td><td>$description</td></tr>";
            $isTagRow = true;
            $tag_count++;
        }
    }
    echo "</table>";
    echo "<br>Всього у файлі описано тегів: $tag_count";
?>
</body>
</html>