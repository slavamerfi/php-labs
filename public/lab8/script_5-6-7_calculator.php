<?php
    class Calculator {
        public function add($a, $b) {
            return $a + $b;
        }

        public function subtract($a, $b) {
            return $a - $b;
        }

        public function multiply($a, $b) {
            return $a * $b;
        }

        public function divide($a, $b) {
            if ($b == 0) {
                return "Помилка: ділення на нуль!";
            } else {
                return $a / $b;
            }
        }

        public function modulo($a, $b) {
            if ($b == 0) {
                return "Помилка: ділення на нуль!";
            } else {
                return $a % $b;
            }
        }

        public function squareRoot($a) {
            if ($a < 0) {
                return "Помилка: від'ємне число!";
            } else {
                return sqrt($a);
            }
        }

        public function power($a, $b) {
            return pow($a, $b);
        }
    }

    $calculator = new Calculator();
    echo "<h2>Перевірка працездатності </h2>";
    echo "Додавання: 6 + 3 = " . $calculator->add(6, 3) . "<br>";
    echo "Віднімання: 8 - 2 = " . $calculator->subtract(8, 2) . "<br>";
    echo "Множення: 5 * 4 = " . $calculator->multiply(5, 4) . "<br>";
    echo "Ділення: 15 / 3 = " . $calculator->divide(15, 3) . "<br>";
    echo "Ділення по модулю: 16 % 5 = " . $calculator->modulo(16, 5) . "<br>";
    echo "Корінь квадратний: 16 = " . $calculator->squareRoot(16) . "<br>";
    echo "Піднесення до степеня: 3 ^ 3 = " . $calculator->power(3, 3) . "<br>";

    class Dispatcher {
        private $calculator;

        public function __construct($calculator) {
            $this->calculator = $calculator;
        }

        public function display() {
            echo "<h2>Форма розрахунку</h2>";
            echo "<form action='' method='post'>";
            echo "Число 1: <input type='text' name='num1' style='padding: 5px; margin-bottom: 10px;'><br>";
            echo "Число 2: <input type='text' name='num2' style='padding: 5px; margin-bottom: 10px;'><br>";
            echo "<select name='operation' style='padding: 5px; margin-bottom: 10px;'>
                    <option value='add'>Додавання</option>
                    <option value='subtract'>Віднімання</option>
                    <option value='multiply'>Множення</option>
                    <option value='divide'>Ділення</option>
                    <option value='modulo'>Ділення по модулю</option>
                    <option value='power'>Піднесення до степеня</option>
                </select><br>";
            echo "<input type='submit' name='submit' value='Розрахувати' style='padding: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;'>";
            echo "</form>";
        }

        public function dispatch() {
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operation) {
                        case 'add':
                            echo "Результат: " . $this->calculator->add($num1, $num2);
                            break;
                        case 'subtract':
                            echo "Результат: " . $this->calculator->subtract($num1, $num2);
                            break;
                        case 'multiply':
                            echo "Результат: " . $this->calculator->multiply($num1, $num2);
                            break;
                        case 'divide':
                            echo "Результат: " . $this->calculator->divide($num1, $num2);
                            break;
                        case 'module_divide':
                            echo "Результат: " . $this->calculator->modulo($num1, $num2);
                            break;
                        case 'power':
                            echo "Результат: " . $this->calculator->power($num1, $num2);
                            break;
                        default:
                            echo "Неправильна операція!";
                            break;
                    }
                } else {
                    echo "Будь ласка, введіть числа!";
                }
            }
        }
    }

    $dispatcher = new Dispatcher($calculator);

    $dispatcher->display();
    $dispatcher->dispatch();
?>
