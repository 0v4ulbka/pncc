<!DOCTYPE html>
<html lang = 'ru'>
<head>
    <title>Простейший PHP-скрипт</title>
    <meta charset="utf-8">
</head>
<body>
<p>Задание 1</p>
<?php
date_default_timezone_set('Asia/Krasnoyarsk');
$date = date('d.m.y h:i');
echo "Дата и время сейчас: $date";
?>
<p>Задание 2</p>
<?php
$rand = mt_rand(0, 1000);
echo "Рандомное число от 0 до 1000: $rand";
?>
<p>Задание 3</p>
<?php
$a = round(42.43752, 2);
echo "Округление числа 42.43752 до двух знаков после запятой: $a";
?>
<p>Задание 4</p>
<?php
$a = decbin(4252);
$b = decbin(89090);
echo "Число 4252 в двоичной СС: $a <br>";
echo "Число 89090 в двоичной СС: $b";
?>
<p>Задание 5</p>
<?php
//file_put_contents('hello.txt', 'Hello, world!');
//echo file_get_contents('hello.txt')
?>
<p>Задание 6</p>
<?php
//$date = date('y-m-d-h-i-s');
//$rand = mt_rand(0, PHP_INT_MAX);
//file_put_contents("$date.txt", "$rand");
?>
<p>Задание 8</p>
<?php
$a = 0;
$b = 1;
for ($i = 0; $i < 200; $i++){
    $c = $b + $a;
    $a = $b;
    $b = $c;
}
echo $c;
?>
<p>Задание 10</p>
<?php
$a = ['fst', 'snd', 'thd', 'fth'];
$b = array_rand($a, 1);
echo $a[$b];
?>
<p>Задание 12</p>
<?php
$arr = ['fst', 'snd', 'thd', 'fth’', 'snd', 'thd'];
$arr = array_unique($arr);
print_r($arr);
?>
<p>Задание 13</p>
<?php
function odd($num){
    if ($num % 2 == 0){
        echo "Число $num;</br>Вывод: true";
    }
    else {
        echo "Число $num;</br>Вывод:false";
    }
}
odd(12);
?>
<p>Индивидуальное задание 16</p>
<?php
$X = [25, 7, 236, 1835, 721, 4, 28];
$Y = [31, 69, 77, 37, 29, 22, 33, 56];
$Z1 = []; $Z2 = [];
$z = [];
$i = 0;
while($i < 3){
    $m = max($X);
    $Z1[] = $m;
    $Z2[] = decoct($m);
    unset($X[array_search($m, $X)]);
    $i++;
}
for ($i = 0; $i < count($Y); $i++){
    $y = strval($Y[$i]);
    for ($j = 0; $j < strlen($y); $j++){
        if ($y[0]%2 != 0 && $y[1]%2 != 0){
            $z[] = intval($y);
        }
    }
}

$len = count($z);
$z = array_unique($z);
for ($i = 0; $i < $len; $i++){
    $Z1[] = $z[$i];
    $Z2[] = decoct($z[$i]);
}
$Z1 = array_unique($Z1);
$Z2 = array_unique($Z2);
unset($Z1[4]);
unset($Z2[4]);
echo "Вывод массива в десятичной СС:</br> ";
print_r($Z1);
echo "</br> Вывод массива в восьмеричной СС:</br> ";
print_r($Z2);
?>
</body>
</html>
