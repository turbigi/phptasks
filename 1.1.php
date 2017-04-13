<?php

$n = 223;
$result = 0;

while ($n != 0) {
    if ($n % 10 < 5)
        $result++;
    $n = (int)($n / 10);
}

echo $result;
