<style>
    .multiplication-column {
        float: left; /* Розміщення по лівому краю */
        margin-right: 20px; /* Відступ між стовпцями */
    }
    .multiplication-table {
        border-collapse: collapse; /* Злиття рамок таблиці */
    }
    .multiplication-table th,
    .multiplication-table td {
        border: 1px solid black; /* Стиль рамки */
        padding: 8px; /* Відступи в комірках */
    }
</style>

<?php
function multiplication_table($number) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$number * $i = " . ($number * $i) . "<br>";
    }
}

echo "<h1>Таблиця множення</h1>";

for ($j = 2; $j <= 9; $j++) {
    echo "<div class='multiplication-column'>";
    echo "<h3>Числа $j:</h3>";
    echo "<table class='multiplication-table'>";
        multiplication_table($j);
    echo "</table>";
    echo "</div>";
}
?>