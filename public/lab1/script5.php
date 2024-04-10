<!DOCTYPE html>
<html>
<head>
    <title>Таблиця кольорів HTML</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>

<?php
$html_colors = array(
    "#0000FF" => "Синій",
    "#FFFF00" => "Жовтий",
    "#FF00FF" => "Фуксія",
    "#00FFFF" => "Блакитний",
    "#FF0000" => "Червоний",
    "#00FF00" => "Зелений",
    "#800000" => "Темно-червоний",
    "#008000" => "Темно-зелений",
    "#000080" => "Темно-синій",
    "#808000" => "Оливковий",
    "#800080" => "Пурпурний",
    "#008080" => "Смарагдовий",
    "#808080" => "Сірий",
    "#C0C0C0" => "Сріблястий",
    "#800000" => "Темно-червоний",
    "#008000" => "Темно-зелений",
    "#000080" => "Темно-синій",
    "#808000" => "Оливковий",
    "#800080" => "Пурпурний",
    "#008080" => "Смарагдовий",
    "#808080" => "Сірий",
    "#C0C0C0" => "Сріблястий",
);
?>

<h1>Таблиця кольорів HTML</h1>

<table>
    <thead>
        <tr>
            <th>Колір</th>
            <th>Назва</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($html_colors as $color => $name) {
            echo "<tr>";
            echo "<td style='background-color: $color'></td>";
            echo "<td>$name</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>