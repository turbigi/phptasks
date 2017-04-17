<?php
//Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры следовали в порядке возрастания

$n = 4619;
$n2 = $n;

$min = $n % 10;
$m = $min;
$positionOfMin = 0;
$position = 0;
$startPosition = 0;
$count = countOfNumber($n);

while ($count != 1) {
    while ($n != 0) {
        $rest = $n % 10;
        if ($rest <= $min && $position != $startPosition) {
            $positionOfMin = $startPosition;
            $min = $rest;
            $m = $min;
            $position++;
        }
        $startPosition++;
        $n = (int)($n / 10);
    }
    $startPosition = 0;
    $n = $n2;
    $m = $m * 10 + $min;
    $count--;
}

echo $m;

function countOfNumber($n)
{
    $countOf = 0;
    while ($n != 0) {
        $n = (int)($n / 10);
        $countOf++;
    }
    return $countOf;
}

