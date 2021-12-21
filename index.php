<?php

var_dump('12345'); //Выводит тип данных, (количество символов) и само значение в кавычках ""

echo '<hr>' . 'Длина строки<br>';

$str = 'QWERTY';

echo strlen($str) . '<br>';

$strRus = 'Россия';

echo mb_strlen($strRus);

echo '<hr> Работа с HTML тегами в PHP<br>';

echo '<b>жирный</b>' . '<br>';

echo '<b>';
echo 'жирный';
echo '</b>' . '<br>';

$str = 'жирный';
echo '<b>' . $str . '</b>';

echo '<br><br>';

echo 'Задача 1<br>';
echo '<i>курсивный текст</i>';

echo '<br><br>';

echo 'Задача 2<br>';
echo '1<br>' . '2<br>' . '3<br>' . '4<br>' . '5<br>' . '6<br>' . '7<br>' . '8<br>' . '9<br>';

echo '<a href = "index.php">ссылка</a>';

echo '<br>';

$href = 'index.php';
$text = 'ссылка';

echo '<a href="' . $href . '">' . $text . '</a>';

echo '<br><br>';

echo 'Задача 3<br>';

echo '<img src = "2013-10-11_10.33.17.jpg">';

echo '<br><br>';

echo 'Задача 4<br>';

echo '<input placeholder = "Введите текст">';

echo '<br><br>';

echo 'Задача 5<br>';

echo '<textarea placeholder = "введите
многострочный
текст"></textarea>';

echo '<hr> Логические значения в PHP <br>';

echo 'Задача 1<br>';

$boolean = false;

var_dump($boolean);

echo '<hr> Практика по работе с переменными и оперциями в PHP <br>';

echo 'Задача 1<br>';
echo 60*60*24; //количество секнд в сутках

echo '<br>Задача 2<br>';
echo 60*60*24*30; //количество секнд в 30 сутках

echo '<br>Задача 3<br>';
echo 60*60*24*365; //количество секнд в году

echo '<br>Задача 4<br>';
echo 60*24; //количество минут в сутках

echo '<br>Задача 5<br>';
echo 60*24*365; //количество минут в году

echo '<br>Задача 6<br>';
echo 1024*1024 . ' байт'; //количество байт в мегабайте

echo '<br>Задача 7<br>';
echo 1024*1024*1024 . ' байт'; //количество байт в гигабайте

echo '<br>Задача 8<br>';
echo 1024*1024*1024*10 . ' байт'; //количество байт в 10 гигабайтах

echo '<br>Задача 9<br>';
echo 1024*1024*1024*1024 . ' байт'; //количество байт в тераббайте

echo '<br>Задача 10<br>';
echo 1024*1024*1024 . ' киллобайт'; //количество килобайт в террабайте

echo '<br><b>Задача 11</b><br>';
$r = 10;
$s = 3.14*$r**2;
echo $s;

echo '<br><b>Задача 12</b><br>';
$a = 5;
$s = $a * $a;
echo $s;

echo '<br><b>Задача 13</b><br>';
$a = 45;
$b = 15;
$s = $a * $b;
echo $s;

echo '<br><b>Задача 14</b><br>';
$a = 15;
$b = 40;
$p = $a * 2 + $b * 2;
echo $p;

echo '<br><b>Задача 15</b><br>';
$ts = 25;
echo round(5 / 9 * ($ts - 32), 2) . '°F';

echo '<br><b>Задача 16</b><br>';
$tf = 48;
echo round((9 / 5) *$tf + 32, 2) . '°C';