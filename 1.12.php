<?php
//Определить, является ли заданное целое число N простым.
$n = 5;
$flag = false;
$firstNumber = 2;

if ($n == 2) {
    echo "Simple";
    return;
}

do {
    if ($n % $firstNumber == 0) {
        echo "Not simple";
        break;
    } else {
        $firstNumber++;
        $flag = true;
    }
} while (pow($firstNumber, 2) < $n);

if ($flag) {
    echo "Simple";
}
