<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function (int $arr) {
    return $arr % 2 == 0 ? $arr . " - чётное" : $arr . " - нечётное";
}, $arr);

echo implode(', ', $result);
