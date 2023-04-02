<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SUsers.css">
    <title>login</title>
</head>
<body>
<?php
$a = 'Admin ';
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
            <a class="navMain" href="views/site/possibilities.php"><?= $a?></a>
            <?php
        }else{
            ?>
            <a class="navMain" href="views/site/possibilities.php"><?= $a?></a>
            <?php
        }
        ?>
        <form method="post">
            <input class="button" type="submit" value="Выйти" name="logout">
        </form>
    </div>
</header>
<div>
    <h1>Пользователи системы</h1>
        <table class="title">
            <tr>
                <th>ФИО пользователя</th>
                <th>Номер телефона</th>
                <th>Email</th>
                <th>Пароль</th>
                <td colspan="2"><a class="buttonADD" href="addUser.php"><h2 class="buttonADD">+</h2></a></td>
            </tr>
            <tr>
                <td>ФИО работника</td>
                <td>Номер телефона</td>
                <td>Email</td>
                <td>Пароль</td>
                <td class="buttonADD"><a class="buttonUPD" href="updUser.php"><h2>&#9998;</h2></a></td>
                <td><a class="buttonDEL" href=""><h2>&mdash;</h2></a></td>
            </tr>
        </table>
</div>
</body>
</html>