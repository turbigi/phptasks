<?php
//Парными  простыми числами называются два простых числа, разность  которых равна двум.
// Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел
$n = 10;
$start = 2;

while ($n > 0) {
    if (checkSimple($start + 2) && checkSimple($start)) {
        echo $start . " " . ($start + 2) . "\n";
        $n--;
        $start++;
    } else {
        $start++;
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
    } while (pow($firstNumber, 2) <= $number);

    if ($flag) {
        return true;
    }
}