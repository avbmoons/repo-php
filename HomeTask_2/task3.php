<?php

start:
$number = readline("Введите число: ");

$rest = $number % 8;
//echo "остаток $rest\n";

if (!($number > 0)) {
    goto start;
} else {
    switch ($rest) {
        case 0:
            echo "указательный";
            break;
        case 1:
            echo "большой";
            break;
        case 2:
            echo "указательный";
            break;
        case 3:
            echo "средний";
            break;
        case 4:
            echo "безымянный";
            break;
        case 5:
            echo "мизинец";
            break;
        case 6:
            echo "безымянный";
            break;
        case 7:
            echo "средний";
            break;
    }
}

// if (!($number > 0)) {
//     goto start;
// } else {

//     switch ($number) {
//         case 1:
//             echo "большой";
//             break;
//         case 2:
//             echo "указательный";
//             break;
//         case 3:
//             echo "средний";
//             break;
//         case 4:
//             echo "безымянный";
//             break;
//         case 5:
//             echo "мизинец";
//             break;
//         case 6:
//             echo "безымянный";
//             break;
//         case 7:
//             echo "средний";
//             break;
//         case 8:
//             echo "указательный";
//             break;
//         case 9:
//             echo "большой";
//             break;
//     }
// }
