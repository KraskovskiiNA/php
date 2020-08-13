<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Ex 1

    $i = 0;
    while ($i <= 100) {
        $i++;
        if (($i % 3) == 0){
            echo $i;
        } 
    }

    // Ex 2

    $a = 0;
    do {
        if ($a == 0) {
            echo $a . '- это ноль <br>';
        } elseif ($a % 2 == 0) {
            echo $a . '- четное число <br>';
        } elseif ($a % 2 !==0) {
            echo $a . '- нечетное число <br>';
        }
        $a++;
    } while ($a <= 10);

    // Ex 7

    for ( $i = 0; $i <= 9; print $i, $i++ ){}
    ?>
</body>
</html>