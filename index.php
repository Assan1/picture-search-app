<?php
//for ($i = 1; $i <= 100; $i++) {
//echo $i . " \n";
//}

//$fruits = array("apple", "banana", "cherry");
//foreach ($fruits as $fruit) {
//    echo $fruit . "\n";
//}

//$number = 5;
//$factorial = 1;
//for ($i = 1; $i <= $number; $i++) {
//    $factorial *= $i;
//}
//echo "Factorial of $number is $factorial";

#$correctPassword = "1234";
#do {
#    $password = readline("Enter password: ");
#} while ($password != $correctPassword);
#echo "Access granted!";

// 1-тапсырма
//$a = 50;
//$b = 10;


//if ($a == $b) {
//echo "1";
//} elseif ($a > $b) {
//    echo "2"; // Егер $a $b мәнінен үлкен болса
//} else {
//    echo "3"; // Әйтпесе
//}


// Сөзді санға ауыстыратын массив
$wordsToNumbers = array(
    'zero' => 0,
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5,
    'six' => 6,
    'seven' => 7,
    'eight' => 8,
    'nine' => 9
);

// Айнымалыға мән беру
$a = 'three'; // Мысалы, 'one'


if (array_key_exists($a, $wordsToNumbers)) {
    echo $wordsToNumbers[$a];
} else {
    echo "Unknown word";
}


// Айнымалыға мән беру
$color = 'red'; // Мысалы, 'red'

// Светофор түстеріне сәйкес хабарламалар
switch ($color) {
    case 'red':
        echo "Тоқта";
        break;
    case 'yellow':
        echo "Дайындал";
        break;
    case 'green':
        echo "Жүре беріңіз";
        break;
    default:
        echo "Белгісіз түс";
        break;
}

//

$fruits = array("Apple", "Banana", "Orange");
echo "Массивте " . count($fruits) . " элемент бар.";

//

$fruits = array("Apple", "Banana", "Orange");
echo "Массивтің екінші элементі: " . $fruits[1];

//

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Ben is " . $age['Ben'] . " years old.";

//

$colors = array("red", "green", "blue", "yellow");
sort($colors);
print_r($colors);

//

$colors = array("red", "green", "blue", "yellow");
sort($colors);
print_r($colors);

//

$colors = array("red", "green", "blue", "yellow");
rsort($colors);
print_r($colors);

//



