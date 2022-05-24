<?php

require_once 'Task.php';
require_once 'User.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('ivanov', 'ivanov@dom.ru');

$task = new Task($user);

$task->setDescription('Погулять с собакой');
$task->setPriority(4);

TaskService::addComment($user, $task, 'Утром каждый день ');
TaskService::addComment($user, $task, 'Ещё комментарий ');

print_r($task);

echo "Комментарии:\n";

foreach ($task->getComments() as $comment) {
    echo $comment->getText() . ", ";
    echo "Задача:  " . $comment->getTask()->getDescription() . "\n";
}
