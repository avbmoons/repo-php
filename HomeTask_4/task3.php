<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$value = "Книга";

$result = findItem($value, $box);

if ($result == null) {
    echo "Значения $value в массиве нет";
}

function findItem($itemName, $arr)
{
    foreach ($arr as $items) {
        if (is_array($items)) {
            findItem($itemName, $items);
        } elseif ($items == $itemName) {
            echo "Значение $itemName в массиве есть";
            exit;
        }
    }
}
