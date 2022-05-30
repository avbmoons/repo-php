<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="view/style.css">
</head>

<body>
    <h1 class="greet"><?= $pageHeader ?></h1>

    <?php if (is_null($username)) : ?>
        <div class="enter">
            <a href="/?controller=security">Войти</a>
        </div>

    <?php else : ?>
        <div class="enter">
            Добро пожаловать <?= $username ?>!<br>
            <a href="/?controller=security&action=logout">Выйти</a>
            <a href="/?controller=tasks">Задачи</a>
        </div>


    <?php endif; ?>

</body>

</html>