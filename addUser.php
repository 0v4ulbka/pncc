<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="SFormADD.css">
    <title>login</title>
</head>
<body>
<?php
if(!empty($_POST)){
    header('Location: '.'users.php');
}
?>
<div>
    <p>Добавление пользователя в систему</p>
    <form method="post">
        <p>Введите фамилию пользователя</p>
        <label>
            <input type="text" name="surname">
        </label>
        <p>Введите имя пользователя</p>
        <label>
            <input type="text" name="name">
        </label>
        <p>Введите отчество пользователя</p>
        <label>
            <input type="text" name="patronymic	">
        </label>
        <p>Введите номер телефона пользователя</p>
        <label>
            <input type="text" name="phone" placeholder="+7 (000) 000 00-00">
        </label>
        <p>Введите email пользователя</p>
        <label>
            <input type="text" name="email">
        </label>
        <p>Введите пароль пользователя</p>
        <label>
            <input type="password" name="password">
        </label>
        <input class="button" type="submit" value="Отмена" name="cancel">
        <input class="button" type="submit" value="Добвить" name="add">
    </form>
</div>
</body>
</html>