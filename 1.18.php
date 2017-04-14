<?php

//Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей другого.
//Найти все пары дружественных чисел, лежащих в диапазоне от N до M.

$n = 200;
$m = 300;

for ($i = $n; $i < $m; $i++) {
    for ($y = $n; $y < $m; $y++) {
        echo checkFriend($i,$y);
    }
}

function checkFriend($n, $m)
{
    $resultOfN = 0;
    $resultOfM = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $resultOfN += $i;
        }
    }
    if ($resultOfN == $m) {
        for ($i = 1; $i < $m; $i++) {
            if ($m % $i == 0) {
                $resultOfM += $i;
            }
        }
    }
    if ($resultOfM == $n) {
        return $n . " " . $m . "\n";
    }
}