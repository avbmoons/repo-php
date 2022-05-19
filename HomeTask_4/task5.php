<?php

function add($x, $y)
{
    return $x + $y;
}

function sub($x, $y)
{
    return $x - $y;
}

function mult($x, $y)
{
    return $x * $y;
}

function div($x, $y)
{
    if ($y == 0) {
        return "Значение не существует";
    } else {
        return $x / $y;
    }
}

function mathOperation($x, $y, $operation)
{
    $type = "$operation";
    return $type("$x", "$y");
}

$value = mathOperation(2, 0, 'div');
echo $value;
