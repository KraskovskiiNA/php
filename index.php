 <!-- Ex №4  -->
<?php
$tit = Shop;
$head = Hello;
$year = date("Y");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="$tit"?></title>
</head>
<body>

<h1><?="$head"?></h1>

 <!-- Ex №2  -->
<?php
    $int10 = 42;
    $int2 = 0b101010;
    $int8 = 052;
    $int16 = 0x2A;
    echo "Десятеричная система $int10 <br>"; // 42
    echo "Двоичная система $int2 <br>"; // 42
    echo "Восьмеричная система $int8 <br>";  //42
    echo "Шестнадцатеричная система $int16 <br>"; //42

    $precise1 = 1.5;
    $precise2 = 1.5e4; 
    $precise3 = 6E-8; 
    echo "$precise1 | $precise2 | $precise3 <br>"; // 1.5 / 15000 / 0.00000006

    $a = 1;
    echo "$a"; // выведет значение переменной = 1
    echo '$a <br>'; // выведет имя переменной $a
?>

 <!-- Ex №3  -->
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b); // Почему true? - Сравниваются числа 5 и 05
    var_dump((int)'012345'); // Почему 12345? - Происходит явное приведение к числу в десятичной системе счисления.
    var_dump((float)123.0 === (int)123.0); // Почему false? - Разные типы данных
    var_dump((int)0 === (int)'hello, world'); // Почему true? - При приведении строки (с отсутствием цифр) к числу получается 0. Ноль равен по значению и типу нулю.
?>

 <!-- Ex №5  -->
<?php
$i = 1;
$d = 2;
$i= $i + $d - ($d = $i); // $i = 2; $d = 1;
?>


<p><?="$year"?> year</p>

</body>
</html>