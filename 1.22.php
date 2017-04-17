<?php

//Натуральное число N разложить на простые множители
$n = 378;

if (checkSimple($n)) {
    echo "Simple";
    exit();
}

for ($i = 2; $i <= $n; $i++) {
    if (checkSimple($i)) {
        if ($n % $i == 0) {
            echo $i . " ";
            $n /= $i;
            $i = 2;
        }
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
        } else {
            $firstNumber++;
            $flag = true;
        }
    } while (pow($firstNumber, 2) < $number);

    if ($flag) {
        return true;
    }
}