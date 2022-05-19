<?php

function fact($number)
{
    if ($number <= 1) {
        return 1;
    }
    return $number * fact($number - 1);
}

$value = 5;
echo "Факториал $value равен " . fact($value);
