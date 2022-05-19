<?php

$arrX = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$res =  result($arrX);
print_r($res);

function result($arr): ?array
{
    arsort($arr);
    return [
        'max' => $arr[array_key_first($arr)],
        'min' => $arr[array_key_last($arr)],
        'avg' => round((array_sum($arr) / count($arr)), 3)
    ];
}
