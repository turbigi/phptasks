<?php

//Найти целое число в диапазоне от N до M с наибольшей суммой  делителей

$n = 3;
$m = 19;
$maxSum = 0;
$number = 0;
for ($i = $n; $i <= $m; $i++) {
    if (($res = checkMaxSum($i)) > $maxSum) {
        $maxSum = $res;
        $number = $i;
    }
}
echo "number: " . $number . " sum: " . $maxSum;

function checkMaxSum($n)
{
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $result += $i;
        }
    }
    return $result;
}