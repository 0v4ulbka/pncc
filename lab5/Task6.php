<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 6</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($user_agent, "Chrome") !== false){
    $browser = "Internet Explorer";
    die('Доступ к файлу запрещен');
}
?>
</body>
</html>