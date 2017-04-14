<?php

//Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.

$n = 44;
$m = 100;

echo checkNOD($n, $m);

function checkNOD($n, $m)
{
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0 && $m % $i == 0) {
            $result = $i;
        }
    }
    return $result;
}