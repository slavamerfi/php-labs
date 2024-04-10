<!DOCTYPE html>
<html>
<head>
    <title>Веб сторінка таблиця множення</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            height: 20px;
            width: 100px;
            padding: 20px;
            text-align: center;
            font-size: 30px
        }
    </style>
</head>
<body>

<h1>Таблиця множення</h1>

<table >
    <thead>
        <tr>
            <th>×</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th style='background: blue'>$i</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th style='background: yellow'>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td";
                if ($i == $j) {
                    echo " style='background: red;'";
                }
                echo ">" . ($i * $j) . "</td>";         
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>