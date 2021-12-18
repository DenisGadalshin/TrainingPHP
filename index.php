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
текст">';