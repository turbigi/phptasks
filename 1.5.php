<?php


$n = 4587;
$m = 0;
$rest = $n % 10;
$m = $rest;

while ($n != 0) {
    if ((int)($n / 10) == 0) break;
    $n = (int)($n / 10);
    $m = $m * 10 + ($n % 10);
}
echo $m;
