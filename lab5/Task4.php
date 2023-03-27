<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 4</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
date_default_timezone_set('Asia/Krasnoyarsk');
$date = date('H');
$name = $_POST['name'];
$surname = $_POST['surname'];
if ($_POST['submit']){
    if (5 < $date && $date < 11){
        echo "<p>Доброе утро, $name $surname!</p>";
    }
    if (11 < $date && $date < 16){
        echo "<p>Добрый день, $name $surname!</p>";
    }
    if (16 < $date && $date < 0){
        echo "<p>Добрый вечер, $name $surname!</p>";
    }
    if (0 < $date && $date <5){
        echo "<p>Доброй ночи, $name $surname!</p>";
    }
}
?>
<form method="post">
    <p>Введите ваше имя</p>
    <label>
        <input type="text" name="name" value="<?= $name?>" required>
    </label>
    <p>Введите вашу фамилию</p>
    <label>
        <input type="text" name="surname" value="<?= $surname?>">
    </label><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>