<?php

//Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.

$n = 200;
$m = 300;

echo checkNOK($n, $m);

function checkNOK($n, $m)
{
    $min = 0;

    if ($n <= $m) {
        $min = $n;
    } else {
        $min = $m;
    }
    for ($i = $min; $i <= $m * $n; $i++) {
        if ($i % $n == 0 && $i % $m == 0) {
            return $i;
        }
    }
}