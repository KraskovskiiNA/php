<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<?php 

$a = rand(-10,10);
$b = rand(-10,10);

// Ex 1

if($a >= 0 && $b >= 0) echo "$a" - "$b";
if($a < 0 && $b < 0) echo "$a" * "$b";
if($a < 0 XOR $b < 0) echo "$a" + "$b";

// Ex 2

$c = rand(0,15);
switch ($c) {
    case 1:
        echo $c++;
    case 2:
        echo $c++;
    case 3:
        echo $c++;
    case 4:
        echo $c++;
    case 5:
        echo $c++;
    case 6:
        echo $c++;
    case 7:
        echo $c++;
    case 8:
        echo $c++;
    case 9:
        echo $c++;
    case 10:
        echo $c++;
    case 11:
        echo $c++;
    case 12:
        echo $c++;
    case 13:
        echo $c++;
    case 14:
        echo $c++;
    case 15:
        echo $c;
                
}

// Ex 3

function sum($A, $B){
    return $A + $B;
}
function sub($A, $B){
    return $A - $B;
}
function divi($A, $B){
    return $A / $B;
}
function mul($A, $B){
    return $A * $B;
}

// Ex 4

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 'sum':
            return sum($arg1,$arg2);
        break;
        case 'sub':
            return sub($arg1,$arg2);
        break;
        case 'divi':
            return divi($arg1,$arg2);
        break;
        case 'mul':
            return mul($arg1,$arg2);
        break;
    }
}

echo mathOperation($a,$b,sub);

// Ex 5

$foo = str_replace('{{FOOTER}}', date(Y), file_get_contents('index.html'));

?>
</body>

</html>