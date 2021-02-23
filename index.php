<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<b>Задание 1</b>' . '<br />';
    echo '<br />';
    $a = 10;
    $b = 2;
    echo 'a + b' . ' ' . '=' . ' ' . ($a + $b) . '<br />';
    echo 'a - b' . ' ' . '=' . ' ' . ($a - $b) . '<br />';
    echo 'a * b' . ' ' . '=' . ' ' . ($a * $b) . '<br />';
    echo 'a / b' . ' ' . '=' . ' ' . ($a / $b) . '<br />';
    echo '<hr />';

    ///

    echo '<b>Задание 2</b>' . '<br />';
    echo '<br />';
    $x = 2;
    $y = 6;
    $z = 9;
    echo '=' . ' ' . ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
    echo '<hr />';

    ///

    echo '<b>Задание 3</b>' . '<br />';
    echo '<br />';
    $a = 17;
    $b = 10;
    $c = $a - $b;
    echo 'result' . ' ' . '=' . ' ' . $result = $c + $d = 7;
    echo '<hr />';

    ///

    echo '<b>Задание 4</b>' . '<br />';
    echo '<br />';
    $text1 = 'Привет,';
    $text2='Мир!';
    echo $text1 . ' ' . $text2;
    echo '<hr />';

    ///

    echo '<b>Задание 5</b>' . '<br />';
    echo '<br />';
    echo 'Привет,' . ' ' . $name = 'Михаил!';
    echo '<hr />';

    ///

    echo '<b>Задание 6</b>' . '<br />';
    echo '<br />';
    $num = '12345';
    echo 'Сумма' . ' ' . '=' .  ($num[0] + $num[1] + $num[2] + $num[3] + $num[4]);
    echo '<hr />';

    ///

    echo '<b>Задание 7</b>' . '<br />';
    echo '<br />';
    $min = 60 * 60;
    $hour = 60 * $min;
    $day = 24 * $hour;
    $month = 30 * $day;
    $year = 12 * $month;
    $year2000 = 20 * $year + $month + 25 * $day;
    echo 'В часе'. ' ' . $hour . ' ' . 'секунд' . '<br />';
    echo 'В сутках'. ' ' . $day . ' ' . 'секунд' . '<br />';
    echo 'В месяце'. ' ' . $month . ' ' . 'секунд' . '<br />';
    echo 'В году'. ' ' . $year . ' ' . 'секунд' . '<br />';
    echo 'C начала 2000 года прошло'. ' ' . $year2000 . ' ' . 'секунд' . '<br />';

    echo '<hr />';


    ///

    echo '<b>Задание 8</b>' . '<br />';
    echo '<br />';
    $hour = 00;
    $min = 30;
    $sec = 54;
    echo $hour . ':' . $min . ':' . $sec;
    echo '<hr />';

    ///

    echo '<b>Задание 9</b>' . '<br />';
    echo '<br />';
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;
    echo $var;
    echo '<hr />';

    ///

    echo '<b>Задание 10</b>' . '<br />';
    echo '<br />';
    define('SURNAME', 'Bohdan');
    $name = 'Mike';
    $patronymic = 'Iosifovich';
    $age = 34;
    if (defined('SURNAME') == true) 
        echo '"Меня зовут' . ' ' . SURNAME . ' ' . '(' . (substr($name, -4, 1)) . '.'  . ' ' . (substr($patronymic, -10, 1)) . '.' . ')' . '<br />' . 'Мне' . ' ' . $age . ' ' . 'года' . '."';
    else echo 'Такой константы нет';
    ?>
    
</body>
</html>