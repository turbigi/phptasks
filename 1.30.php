<?php
//Найти среди натуральных чисел n, n+1,...,2n+1
// числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум
$n = 6;
$m = $n * 2 + 1;
$start = 2;

while ($n + 2 <= $m) {
    if (checkSimple($n + 2) && checkSimple($n)) {
        echo $n . " " . ($n + 2) . "\n";
        $n++;
    } else {
        $n++;
    }
}


function checkSimple($number)
{
    $firstNumber = 2;
    $flag = false;
    if ($number == 2) {
        return true;
    }
    do {
        if ($number % $firstNumber == 0) {
            return false;
            break;
        } else {
            $firstNumber++;
            $flag = true;
        }
    } while (pow($firstNumber, 2) <= $number);

    if ($flag) {
        return true;
    }
}