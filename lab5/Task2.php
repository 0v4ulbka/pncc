<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 2</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
$data = $_POST['text'];
file_put_contents('content.txt', "$data");
?>
<form method="post">
    <p>Поле для ввода</p>
    <label>
    <textarea cols="40" rows="6" name="text"><?= file_get_contents('content.txt');?></textarea>
    </label><br>
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>