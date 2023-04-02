<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <a class="navMain" href="<?= app()->route->getUrl('/hello') ?>">Работники</a>
        <a class="navMain" href="<?= app()->route->getUrl('/hello') ?>">Подраделения и должности</a>
        <a class="navMain" href="<?= app()->route->getUrl('/hello') ?>">Пользователи</a>
    </nav>
        <?php
        if (!app()->auth::check()):
            ?>
        <nav>
            <a class="button" href="<?= app()->route->getUrl('/login') ?>">Войти</a>

        </nav>
        <?php
        else:
            ?>
            <div class="logout">
                <a class="navMain" href="<?= app()->route->getUrl('/hello') ?>"><?= app()->auth::user()->name ?></a>
                <a class="button" href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
            </div>
        <?php
        endif;
        ?>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>