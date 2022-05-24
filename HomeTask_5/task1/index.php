<?php

require_once 'Task.php';
require_once 'User.php';

$user = new User('ivanov', 'ivanov@dom.ru');

$task = new Task($user);

$task->setDescription('Первая задача');
$task->setPriority(4);

print_r($task);

echo "Тут коммент";
