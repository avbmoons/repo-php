<?php

$number = 0;

$name = readline("Как вас зовут? ");

$task1 = readline("Какая задача стоит перед вами сегодня? ");
$time1 = readline("Сколько примерно часов эта задача займемт? ");
$number = $number + 1;

$task2 = readline("Какая ещё задача стоит перед вами сегодня? ");
$time2 = readline("Сколько примерно часов эта задача займемт? ");
$number = $number + 1;

$task3 = readline("И какая ещё задача стоит перед вами сегодня? ");
$time3 = readline("Сколько примерно часов эта задача займемт? ");
$number = $number + 1;

$timeTotal = $time1 + $time2 + $time3;

echo "$name , сегодня у вас запланировано $number приоритетных задач на день:\n - $task1 ($time1 ч)\n - $task2 ($time2 ч)\n - $task3 ($time3 ч)\n Примерное время выполнения плана = $timeTotal ч";
