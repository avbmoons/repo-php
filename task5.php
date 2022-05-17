<?php

$arr = [];

for ($i = 1; $i <= 100;) {
    $num = rand(1, 200);
    if (!in_array($num, $arr)) {
        $arr[$i] = $num;
        $i++;
    }
}

sort($arr);
echo implode(', ', $arr);
