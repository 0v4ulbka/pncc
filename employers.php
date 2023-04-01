<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SEmployers.css">
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
            <a class="navMain" href="">Подразделения и должности</a>
            <a class="navMain" href="">Пользователи</a>
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
    <div class="employers1">
        <h1>Работники предприятия</h1>
        <div class="search">
            <?php
            if ($a != 'User'){
            ?>
            <span>Список сотрудников по должности
                <select>
                    <option value="1">awadawdawdawda</option>
                    <option value="2">awdawdawdawdawd</option>
                    <option value="3">awdawawdadda</option>
                </select>
            </span>
            <span>Список сотрудников по подразделению
                <select>
                    <option value="1">awfeawdd</option>
                    <option value="2">fsawdDAD</option>
                    <option value="3">AWAWDQWFAFA</option>
                </select>
            </span>
            <input class="button" type="submit" value="Найти">
            <?php
            }
            ?>
        </div>
    </div>
        <table class="title">
            <tr>
                <th>ФИО работника</th>
                <th>Пол</th>
                <?php
                if ($a != 'User'){
                ?>
                <th>Дата рождения</th>
                <th>Возраст</th>
                <th>Адрес прописки</th>
                <?php
                }
                ?>
                <th>Должность</th>
                <th>Подразделение</th>
                <td colspan="2"><a class="buttonADD" href=""><h2 class="buttonADD">+</h2></a></td>
            </tr>
            <tr>
                <td>ФИО работника</td>
                <td>Пол</td>
                <?php
                if ($a != 'User'){
                    ?>
                    <td>Дата рождения</td>
                    <td>Возраст</td>
                    <td>Адрес прописки</td>
                    <?php
                }
                ?>
                <td>Должность</td>
                <td>Подразделение</td>
                <td class="buttonADD"><a class="buttonUPD" href=""><h2>&#9998;</h2></a></td>
                <td><a class="buttonDEL" href=""><h2>&mdash;</h2></a></td>
            </tr>
        </table>
</div>
</body>
</html>