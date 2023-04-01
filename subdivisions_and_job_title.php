<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SSAJT.css">
    <title>login</title>
</head>
<body>
<?php
$a = 'Admin ';
if(!empty($_POST['logout'])){
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
    <span>Выберите, что хотите вывести</span>
    <form method="post">
        <label>
            <select name="choose">
                <option>Должности</option>
                <option>Подразделения</option>
            </select>
        </label>
        <input type="submit" value="Искать">
    </form>
    <?php
    if (!empty($_POST['choose']) && $_POST['choose'] == 'Подразделения'){
        ?>
        <p>Подразделения</p>
        <form method="post" action="addsub.php">
            <input type="submit" name="addSub" value="Добавить">
        </form>
        <table>
            <tr>
                <td>фdrhtfththt</td>
                <td>-</td>
            </tr>
            <tr>
                <td>yjgyjgjgjy</td>
                <td>-</td>
            </tr>
            <tr>
                <td>gyjgyjgyjgj</td>
                <td>-</td>
            </tr>
        </table>
        <?php
    }else{
    ?>
        <p>Должности</p>
        <form method="post">
            <input type="submit" name="addJob" value="Добавить">
        </form>
        <table>
            <tr>
                <td>фуаыуауыуа</td>
                <td>-</td>
            </tr>
            <tr>
                <td>фуаыуауыуа</td>
                <td>-</td>
            </tr>
            <tr>
                <td>фуаыуауыуа</td>
                <td>-</td>
            </tr>
        </table>
    <?php
        }
    ?>
</div>
</body>
</html>