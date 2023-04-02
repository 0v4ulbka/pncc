<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Slogin.css">
    <title>login</title>
</head>
<body>
<?php
if (!empty($_POST)){
    header('Location: '.'possibilities.php');
}
?>
<div class="formLog">
    <p class="formText">Вы посещаете страницу как гость, вам нейобходимо зайти в свою учетную запись</p>
    <form method="post">
        <p>Ваш email</p>
        <label>
            <input class="field" type="text" name="email">
        </label>
        <p>Ваш пароль</p>
        <label>
            <input class="field" type="password" name="password">
        </label>
        <input class="button" type="submit" value="Войти">
    </form>
</div>
</body>
</html>