<?php

$arr = ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];

for ($i = 0; $i < 5; $i++) {
    $arr[$i + 5] = $arr[$i];
}

sort($arr);

echo '[' . implode(', ', $arr) . ']';
