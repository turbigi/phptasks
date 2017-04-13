<?php
$n = 6546;
$m = 0;

$restOfN = 0;
$restOfM = 0;

for ($i = 1000; $i < 10000; $i++) {
    $n = $i;
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
            break;
        }
        $n = (int)($n / 10);
        if ((int)($n / 10) == 0) break;
    }
    if ($restOfM != $restOfN) {
        echo $i . "\n";
    }
}