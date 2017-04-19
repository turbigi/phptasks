<?php
//Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в шестнадцатеричной системе счисления

$n = 20;
$m = $n;
$countOf2 = 0;
$countOf8 = 0;

while ($n != 0) {
    $n = (int)($n / 2);
    $countOf2++;
}

convert($m, $countOf2, 2);
echo "\n";

$n = $m;
while ($n != 0) {
    $n = (int)($n / 8);
    $countOf8++;
}

convert($m, $countOf8, 8);


function convert($n, $count, $razr)
{
    $m = $n;
    $rest = 0;
    while ($count != 0) {
        $countOf = 0;
        while ($n != 0) {
            $rest = $n % $razr;
            $n = (int)($n / $razr);
            $countOf++;
            if ($count == $countOf) {
                break;
            }
        }
        echo $rest;
        $n = $m;
        $count--;
    }
}
