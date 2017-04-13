<?php

for ($i = 1000; $i < 10000; $i += 2) {
    $number = $i;
    $rest = $number % 10;
    $up = false;
    $down = false;
    while ($number != 0) {
        $number = (int)($number / 10);
        if ($rest <= $number % 10) $down = true;
        if ($rest >= $number % 10) $up = true;
        if ($down && $up) break;
        $rest = $number % 10;
        if ((int)($number / 10) == 0) break;
    }
    if ($down && $up) continue;
    echo $i . "\n";
}
