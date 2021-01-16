<?php
// Задание #1
function task1(array $strings, $unite = false)
{
    foreach ($strings as $string) {
        echo "<p>" . $string . "</p>";
    }

    if ($unite) {
        return '<p>' . implode(',', $strings) . '</p>';
    }
}

// Задание #2
function task2(string $arithmetic, ...$numbers)
{
    $value = 0;
    if ($arithmetic != '*' and $arithmetic != '/' and $arithmetic != '-' and $arithmetic != '+') {
        return 'Неправильный арифметический оператор';
    }

    foreach ($numbers as $number) {
        if (!is_int($number) and !is_float($number)) {
            return 'Введите корректное число';
        }
        eval("\$value = ($value == 0 ? $number : $value $arithmetic $number);");

    }

    return $value;
}

// Задание #3
function task3(int $a, int $b)
{
    if (!is_int($a) or !is_int($b)) {
        return 'Введите корректное число';
    }

    if ($a > $b) {
        return 'Первое число не должно быть больше второго';
    }

    $rows = $a;
    $cols = $b;
    $multiTable = "<table border='1' align='center''>";

    for ($tr = 1; $tr <= $rows; $tr++) {

        $multiTable .= "<tr>";

        for ($td = 1; $td <= $cols; $td++) {
            $multiTable .= "<td>" . $tr * $td . "</td>";

        }

        $multiTable .= "</tr>";
    }

    $multiTable .= "</table>";

    return $multiTable;
}
