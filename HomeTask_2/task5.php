<?php

$context = "яблок";
$end1 = "о";
$end2 = "а";

$number = (int)readline("Введите число: ");

$endNumber = (int) substr($number, -1);
$subEndNumber = (int)substr($number, -2);

if ($endNumber == 1 && $subEndNumber !== 11) {
    echo $number . " " . $context . $end1;
} elseif ($endNumber >= 2 && $endNumber <= 4) {
    echo $number . " " . $context . $end2;
} else {
    echo $number . " " . $context;
}
