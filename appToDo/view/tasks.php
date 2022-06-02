<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
    <link rel="stylesheet" href="view/style.css">

</head>

<body>
    <h2 class="greet"><?= $pageHeader ?></h2>

    <?php if (is_null($username)) : ?>
        <a href="/controller=security">Войти</a>
    <?php else : ?>
        <div class="enter">
            Добро пожаловать <?= $username ?>!<br>
            <a href="/?controller=security&action=logout">Выйти</a>
            <a href="/">Главная</a>
        </div>

    <?php endif; ?>
    <br>

    <form class="add-task" action="/?controller=tasks&action=add" method="post">
        <input class="new-task" type="text" name="task" placeholder="Напишите новую задачу">
        <input type="submit" value="Добавить">
    </form>

    <?php foreach ($tasks as $task) : ?>
        <div class="list-task" id="<?= $task->getId() ?>">
            <?= $task->getDescription() ?> <a href="/?controller=tasks&action=done&id=<?= $task->getId() ?>">[Done]</a>
            <button class="done" data-id="<?= $task->getId() ?>">Done</button>
        </div>

    <?php endforeach; ?>

    <script>
        let buttons = document.querySelectorAll('.done');
        buttons.forEach((elem) => {
            elem.addEventListener('click', () => {
                let id = elem.getAttribute('data-id');
                (
                    async () => {
                        const response = await fetch('/?controller=tasks&action=apidone&id=' + id);
                        const answer = await response.json();
                        document.getElementById(answer.id).remove();
                    }
                )();
            })
        })
    </script>

</body>

</html>