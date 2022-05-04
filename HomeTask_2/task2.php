<?php

$name = readline("Как вас зовут? ");
$taskNumber = (int)readline("Сколько задач вы планируете сделать сегодня? ");

$task = "Какая задача стоит перед вами сегодня? ";
$time = "Сколько примерно часов эта задача займемт? ";
$timeTotal = 0;
$plan = "";

for ($i = 1; $i <= $taskNumber; $i++) {
    $userTask = readline($task);
    $userTaskTime = readline($time);
    $timeTotal = $timeTotal + $userTaskTime;
    $plan = $plan . $userTask . " " . "(" . $userTaskTime . "ч);\n";
}

echo "$name , сегодня у вас запланировано $taskNumber приоритетных задач на день:\n\n";
echo "$plan \n";
echo "Примерное время выполнения плана = $timeTotal ч.";
