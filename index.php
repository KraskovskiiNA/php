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

    // Ex 3
     
    $town = [
        'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштад'],
        'Рязанская область' => ['Рязань', 'Касимов', 'Шацк']
    ];
    foreach ($town as $key => $value) {
        echo "$key" . ': <br>';
        echo implode(', ', $value) . '. <br>';
    }

    // Ex 4, 5, 9

    function trans($str) {
        $letters = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j', 'з' => 'z', 'и' => 'i',
            'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ь' => '', 'ы' => 'i', 'ъ' => '',
            'э' => 'a', 'ю' => 'yu', 'я' => 'ya'
        ];
        $change = strtr($str, $letters);
        return str_replace(" ", "_", $change);
    };
    echo trans('добрый вечер');

    // Ex 7

    for ( $i = 0; $i <= 9; print $i, $i++ ){}

    // Ex 8

    $town = [
        'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштад'],
        'Рязанская область' => ['Рязань', 'Касимов', 'Шацк']
    ];
    foreach ($town as $key => $value) {
        foreach ($value as $kName) {
            if (mb_substr($kName, 0, 1) == 'К') {
                echo "$kName";
            }
        }
    }
    
    ?>
</body>
</html>