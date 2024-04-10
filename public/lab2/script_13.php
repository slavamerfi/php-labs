<!DOCTYPE html>
<html>
<head>
    <title>Кількість бактерій</title>
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
        form {
            text-align: center;
        }
        input[type="number"] {
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
        td {
            padding: 10px;
        }
    </style>

    <script type="text/javascript">
        function showAlert(message) {
            alert(message);
        }
    </script>
    
</head>
<body>

<h1>Кількість бактерій</h1>

<form method="post" action="">
    <label for="startBacteria">Початкова кількість бактерій:</label>
    <input type="number" id="startBacteria" name="startBacteria">
    <br><br>
    <label for="endBacteria">Кінцева кількість бактерій:</label>
    <input type="number" id="endBacteria" name="endBacteria">
    <br><br>
    <input type="submit" value="Вивести кількість бактерій">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $initialCount = $_POST["startBacteria"];
    $finalCount = $_POST["endBacteria"];

    if ($initialCount >= $finalCount) {
        echo "Початкова кількість має бути меншою за кінцеву кількість.";
    }
    else if ($initialCount * 2 > $finalCount)
    {
        echo "Пройшло менше години";
    } else {
        $currentCount = $initialCount;
        $hours = 1;
        while ($currentCount < $finalCount) {
            echo "Пройшло $hours годин - кількість бактерій: $currentCount<br>";
            $currentCount *= 2;
            $hours++;
        }
    }
}
?>

</body>
</html>
