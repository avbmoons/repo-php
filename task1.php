<?php

error_reporting(E_ALL && !E_NOTICE);

for ($i = 0; $i < 10; $i++) {
    $num1[$i] = (int) rand(1, 20);
    $num2[$i] = (int) rand(10, 30);
    $mult[$i] = $num1[$i] * $num2[$i];
};

echo "Первый массив: " . implode(', ', $num1) . "\n";
echo "Второй массив: " . implode(', ', $num2) . "\n";
echo "Произведения элементов: " . implode(', ', $mult);
