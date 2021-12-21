<?php

    echo '<hr>Принудительное преобразованте типов в PHP<br>';

    echo '<br><b>Задача 1</b><br>';
    $test = '12345';
    var_dump((int) $test);

    echo '<br><b>Задача 2</b><br>';
    $test = '12.345';
    var_dump((float) $test);

    echo '<br><b>Задача 3</b><br>';
    $test = (int) '12.987';
    var_dump($test);

    echo '<br><b>Задача 4</b><br>';
    $test = 12345;
    var_dump((string) $test);

    echo '<br><b>Задача 5</b><br>';
    $test = '12.345';
    var_dump ((string) $test);

    echo '<hr>Получение символов строки на PHP<br>';

    echo '<br><b>Задача 1</b><br>';
    $str = 'abcde';
    echo $str[0] . $str[2] . $str[4]; 

    echo '<br><b>Задача 2</b><br>';
    $str = 'abcde';
    $reverse = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
    echo $reverse;

    echo '<br><b>Задача 3</b><br>';
    $str = 'abcde';
    $num = 2;
    echo $str[$num];

    echo '<br><b>Задача 4</b><br>';
    $str = 'abracadabra';
    $last = strlen($str)-1;
    echo $str[$last];

    echo '<br><b>Задача 5</b><br>';
    $str = 'abracadabra';
    $beforeLast = strlen($str)-2;
    echo $str[$beforeLast];

    echo '<br><b>Задача 6</b><br>';
    $str = 'abracadabra';
    $before_before_last = strlen($str)-3;
    echo $str[$before_before_last];

    echo '<br><b>Задача 7</b><br>';
    $str = '12345';
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

    echo '<br><b>Задача 8</b><br>';
    $int = 12345;
    $str = (string)$int;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

    echo '<br><b>Задача 9</b><br>';
    $int = 12345;
    $str = (string)$int;
    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];

    echo '<br><b>Задача 10</b><br>';
    $int = 12345;
    $str = (string)$int;
    $reverse = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
    $reverseInt = (int)$reverse;
    echo $reverseInt;