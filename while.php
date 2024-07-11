<?php
////1 тапсырма
//$i = 1;
//while ($i < 6) {
//    echo $i;
//    $i = $i + 1;
//}
//?>

// 2 тапсырма
<?php
//for ($i = 1; $i <= 10; $i++) {
//    echo $i;
//    if ($i < 10) {
//        echo "-";
//    }
//}
//?>

// 3 тапсырма
<?php
//$colors = array("red", "green", "blue", "yellow");
//$translations = array(
//    "red" => "қызыл",
//    "green" => "жасыл",
//    "blue" => "көк",
//    "yellow" => "сары"
//);
//
//foreach ($colors as $color) {
//    echo $translations[$color] . " ";
//}
//?>

//4 тапсырма
<?php
//for($i=1; $i<=5; $i++) {
//    for($j=1; $j<=$i; $j++) {
//        echo "* ";
//    }
//    echo " \n";
//}
//?>

// 5 тапсырма
<?php
//// Исходная строка
//$text = '1,4,2,67,55,43,90,100';
//
//// Разбиваем строку по запятой и пробелу (если есть)
//$textArray = explode(',', $text);
//
//// Преобразуем каждый элемент массива в строку
//$textArray = array_map('strval', $textArray);
//
//// Выводим результат
//print_r($textArray);
//?>

//6 тапсырма
<?php
function getFactorial(int $a) : int
{

    $factorial = 1;


    for ($i = 1; $i <= $a; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}


$a = 5;
$result = getFactorial($a);
echo "Факториалы $a = $result";
?>



