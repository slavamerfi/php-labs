<?php

class MultiplicationTable
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function generateTable()
    {
        echo "<div style='margin-bottom: 20px; text-align: center; display: inline; float: left; margin-right: 20px;'>";
        echo "<h3 style='margin-bottom: 5px;'>Таблиця множення для числа {$this->number}:</h3>";
        echo "<table style='border-collapse: collapse; width: 100px; margin: 0 auto; float: left;'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td style='border: 1px solid #000; padding: 5px;'>{$this->number} x $i</td>";
            echo "<td style='border: 1px solid #000; padding: 5px;'>=</td>";
            echo "<td style='border: 1px solid #000; padding: 5px;'>" . ($this->number * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}

$number1 = 5;
$table1 = new MultiplicationTable($number1);
$table1->generateTable();

$number2 = 8;
$table2 = new MultiplicationTable($number2);
$table2->generateTable();

$number2 = 3;
$table2 = new MultiplicationTable($number2);
$table2->generateTable();

$number2 = 4;
$table2 = new MultiplicationTable($number2);
$table2->generateTable();

?>