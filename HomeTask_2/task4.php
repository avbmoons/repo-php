<?php

for ($i = 1; $i <= 100; $i++) {
    $mult3 = $i % 3;
    $mult5 = $i % 5;
    //echo "$i ";
    if ($mult3 == 0 && $mult5 !== 0) {
        echo "Fizz \n";
    } elseif ($mult5 == 0 && $mult3 !== 0) {
        echo "Buzz \n";
    } elseif ($mult3 == 0 && $mult5 == 0) {
        echo "FizzBuzz \n";
    } else {
        echo "$i \n";
    }
}
