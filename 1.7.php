<?php
//Выяснить, есть ли в записи натурального числа N две одинаковые цифры

$n = 6546;
$m = 0;

$restOfN = 0;
$restOfM = 0;


while ($n != 0) {
    $restOfN = $n % 10;
    $m = (int)($n / 10);
    while ($m != 0) {
        $restOfM = $m % 10;
        if ($restOfM == $restOfN) {
            break;
        }
        if ((int)($m / 10) == 0) break;
        $m = (int)($m / 10);
    }
    if ($restOfM == $restOfN) {
        echo "OK";
        break;
    }
    $n = (int)($n / 10);
    if ((int)($n / 10) == 0) break;
}
