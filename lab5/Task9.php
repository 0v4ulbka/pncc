<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 9</title>
    <meta charset='utf-8'>
</head>
<body>
<p>Познакомьтесь с регулярными выражениями и набором рrеg-функций РНР.
    Используя регулярные выражения, извлеките из HTML-содержимого страницы
    http://php.net текст, расположенный между тегами < title > и < /title >.</p>
<?php
$text = file_get_contents('http://php.net');
preg_match('/a[^>]*?>(.*?)<Va>/si', $text, $a);
var_dump($a);
?>
</body>
</html>