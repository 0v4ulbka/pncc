<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 7</title>
    <meta charset='utf-8'>
</head>
<body>
<p>Создайте скрипт, который бы складировал в файл ips.txt уникальные IP-адреса посетителей.
    Для каждого из IР-адресов следует сохранять количество посещений. Таким образом,
    при первом посещении в файле ips.txt появляется новая запись, а при последующих посещениях
    увеличивается счетчик этой записи.</p>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
    $array = file('ips.txt');
    $num = $array[1];
    $num++;
    echo "Вы обновили страницу ".$num." раз(а).";
    file_put_contents('ips.txt', "$ip \n$num");
?>
</body>
</html>