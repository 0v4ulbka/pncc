<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Lab-5 > Задание 1</title>
    <meta charset='utf-8'>
</head>
<body>

<form method="post">
    <p>Введите координаты первой точки</p>
    <label>
        <span>x1</span>
        <input type="text" name="point_x1">
    </label>
    <label>
        <span>y1</span>
        <input type="text" name="point_y1">
    </label>
    <p>Введите координаты второй точки</p>
    <label>
        <span>x2</span>
        <input type="text" name="point_x2">
    </label>
    <label>
        <span>y2</span>
        <input type="text" name="point_y2">
    </label><br><br>
    <input type="submit">
</form>
<?php
$distance = sqrt(pow(($_POST['point_x1'] - $_POST['point_x2']), 2) + pow(($_POST['point_y1'] - $_POST['point_y2']), 2));
?>
<p>Расстояние между точками равно: <?= $distance?></p>
</body>
</html>