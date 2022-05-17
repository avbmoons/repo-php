<?php

error_reporting(E_ALL && !E_NOTICE);

$students = [
    'БАП20' => [
        'Смирнова Христина' => 5,
        'Рогозин Даниил' => 3,
        'Золлин Владилен' => 4,
        'Архаткина Владислава' => 2,
        'Мещерякова Мария' => 5,
        'Саврасова Фаина' => 5,
        'Хромченко Зинаида' => 2,
        'Протасова Майя' => 3,
    ],
    'ИТ20' => [
        'Ябров Тимур' => 4,
        'Белоусов Ефрем' => 2,
        'Ягода Назар' => 5,
        'Ярилова Розалия' => 3,
        'Нырко Платон' => 3,
        'Калинин Агап' => 2,
        'Никифоров Юлиан' => 5,
    ]
];

foreach ($students as $index => $group) {
    echo 'Успеваемость группы ' . $index . ': ' . $progess[$index] = round(array_sum($group) / count($group), 3) . "\n";
}

arsort($progress);
echo "Лучшая группа: " . array_key_first($progess);

foreach ($students as $index => $group) {
    foreach ($group as $student => $grade) {
        if ($grade < 3) {
            $outoff[$index][] = $student;
        }
    }
}

echo "\n" . "Список на отчисление: " . "\n";
print_r($outoff);
