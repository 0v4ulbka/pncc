<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SMain.css">
    <title>login</title>
</head>
<body>
<?php
$a = 'Admin';
if($_POST){
    header('Location: '.'login.php');
}
?>
<header>
    <nav>
        <?php
        if ($a === 'User'){
            ?>
            <a class="navMain" href="employers.php">Работники</a>
            <?php
        }else{
            ?>
            <a class="navMain" href="employers.php">Работники</a>
            <a class="navMain" href="subdivisions_and_job_title.php">Подразделения и должности</a>
            <a class="navMain" href="users.php">Пользователи</a>
            <?php
        }
        ?>
    </nav>
    <div>
        <?php
        if ($a === 'User'){
            ?>
            <a class="navMain" href="main.php"><?= $a?></a>
            <?php
        }else{
            ?>
            <a class="navMain" href="main.php"><?= $a?></a>
            <?php
        }
        ?>
        <form method="post">
            <input class="button" type="submit" value="Выйти" name="logout">
        </form>
    </div>
</header>
<div>
    <h1>Здравствуйте, <?= $a?></h1>
    <div class="opportunities">
        <h2>Что вы можете?</h2>
        <ul>
            <li>Вы можете добавить нового работника в базу</li>
            <li>Вы можете удалить сотрудника из базы</li>
            <?php
            if($a != 'User'){
                ?>
                <li>Подсчитать возраст всех сотрудников</li>
                <li>Посмотреть полный список сотрудников</li>
                <li>Отсортировать работников по признаку</li>
                <li>Отредактировать данные работников</li>
                <li>Отредактировать списки должностей и подразделений</li>
                <li>Добавить и удалить пользователя системы</li>
                <?php
            }
            ?>
        </ul>
        <?php
        if($a != 'User'){
            ?>
            <input class="button" type="submit" name="add" value="Добавить нового пользователя">
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>