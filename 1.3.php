<?php
//Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.

$n = 5555556;
$up = true;

while ($n != 0) {
    $rest = $n % 10;
    $n = (int)($n / 10);
    if ($rest <= $n % 10) {
        $up = false;
        break;
    }
}
if (!$up) {
    echo "No increases";
} else {
    echo "Increases";
}
