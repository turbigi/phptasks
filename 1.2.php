<?php
//Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

$n = 3;

for ($i = 1000; $i < 10000; $i++) {
    $number = $i;
    $result = 0;
    while ($number != 0) {
        $result += $number % 10;
        $number = (int)($number / 10);
    }
    if ($result == $n) echo $i . "\n";
}
