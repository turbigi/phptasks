<?php

$n = 625;
$pow = pow($n, 2);

$restOfN = 0;
$restOfM = 0;

$flag = false;

while ($n != 0) {
    $restOfN = $n % 10;
    $restOfPow = $pow % 10;
    if ($restOfPow == $restOfN) {
        $flag = true;
    } else {
        $flag = false;
    }

    if ((int)($n / 10) == 0) {
        break;
    }
    $n = (int)($n / 10);
    $pow = (int)($pow / 10);
}

if ($flag) {
    echo "Automorph";
} else {
    echo "Not an automorph";
}