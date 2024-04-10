<?php

class Country
{
    public $name;
    public $capital;
    public $population;

    public function __construct($name, $capital, $population)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
    }
}

$ukraine = new Country("Україна", "Київ", 2884000);
$usa = new Country("Сполучені Штати Америки", "Вашингтон", 333002455);
$china = new Country("Китай", "Пекін", 21542000);
$france = new Country("Франція", "Париж", 67974000);
$italy = new Country("Італія", "Рим", 58002455);
$spain = new Country("Іспанія", "Мадрид", 47782000);

$countries = [$ukraine, $usa, $china, $france, $italy, $spain];
echo "<table style='border-collapse: collapse; width: 50%;'>";
foreach ($countries as $country) {
    echo "<tr>";
    echo "<td style='border: 1px solid #ccc; padding: 10px;'><strong>Країна:</strong></td><td style='border: 1px solid #ccc; padding: 10px;'>{$country->name}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='border: 1px solid #ccc; padding: 10px;'><strong>Столиця:</strong></td><td style='border: 1px solid #ccc; padding: 10px;'>{$country->capital}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='border: 1px solid #ccc; padding: 10px;'><strong>Населення столиці:</strong></td><td style='border: 1px solid #ccc; padding: 10px;'>{$country->population}</td>";
    echo "</tr>";
    echo "<tr><td colspan='2'></td></tr>"; 
}
echo "</table>";

?>