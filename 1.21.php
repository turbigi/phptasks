<?php

//Даны  натуральные  числа  N  и  M.
//Определить,  являются  ли  они  взаимно простыми числами. Взаимно простые числа не имеют общих делителей, кроме единицы.

$n = 19;
$m = 20;

$flag = ($m >= $n) ? checkSimple($n, $m) : checkSimple($m, $n);
echo ($flag) ? "mutually simple" : "not mutually simple";

function checkSimple($n, $m)
{
    for ($i = 2; $i <= $n; $i++) {
        if ($n % $i == 0 && $m % $i == 0) {
            return false;
        }
    }
    return true;
}