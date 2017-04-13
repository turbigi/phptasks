<?php

for ($i = 1000; $i < 10000; $i++) {
    $number = $i;
    $flag = false;
    while ($number != 0) {
        $rest = $number % 10;
        $number = (int)($number / 10);
        switch ($rest) {
            case 0:
                $flag = true;
                break;
            case 2:
                $flag = true;
                break;
            case 3:
                $flag = true;
                break;
            case 7:
                $flag = true;
                break;
            default:
                $flag = false;
                break;
        }
        if (!$flag) break;
    }
    if ($flag) echo $i . "\n";
}
