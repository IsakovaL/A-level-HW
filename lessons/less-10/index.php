<?php 
// Задача 3. Файл-тест. Есть файл, в котором хранятся числа в следующем формате:

// 2 4 5;3 2
// 3 2 1;2 0
// 6 5 2 1 2;3 1
// .....
// Цифры до точки с запятой надо суммировать, потом делить на их количество. В первой строке сумма будет 11, разделить на 
//их количество, т.е. на 3, получается 3 целых и в остатке 2. Аналогичным образом во второй строке 6 делим на три, ровно 
//два и в сотатке ноль, в третьей строке сумма 16, на 5 делим, получаем 3 и 1 в остатке. Вот так:

// 2 4 5;3 2                 2+4+5/3 = 3, в остатке 1
// 3 2 1;2 0                 3+2+1/3 = 2, в остатке 0
// 6 5 2 1 2;3 1         6+5+2+1+2/5 = 3, в остатке 1
// .....
// Задача: проверить каждую строку файла, если строка записана верно, вывести ее и после написать True, если строка не верна, вывести результат с пометкой False.

$filepath ="/home/isakoval/Desktop/A-level/lessons/less-10/file.txt";

$array = file($filepath);

foreach ($array as $str) {
    
    $a = explode(';', $str);

    $b = explode(" ", $a[0]);

    $c = explode(" ", $a[1]);

   
    // print_r($b);
    


$countArr = count($b);
$arrSum = array_sum($b);

$res1 = (int)($arrSum / $countArr);
$result1 = round($res1, 0, PHP_ROUND_HALF_DOWN);



$res2 = (int)($arrSum % $countArr);
$result2 = $res2;

//print_r("\n$result1 $result2\n");



    if ($result1 == $c[0]) {

        echo "\n true1 \n";

        } else {

            echo"\n false1 \n";
        };

        if ($result2 == $c[1]) {

            echo "\n true2 \n";
        } else {

            echo"\n false2 \n";
        };

};


// Задача 1. Курьер

// Вам известен номер квартиры, этажность дома и количество квартир на этаже. 
// Задача: написать функцию, которая по заданным параметрам напишет вам, 
// в какой подъезд и на какой этаж подняться, чтобы найти искомую квартиру.
echo "Give me a number:\n";
$handle = fopen("php://stdin","r");
$flat = intval(fgets($handle));

// $flat = 67;
$floors = 9;
$flatsFloor = 4;

$flatsEntrance = (int)$floors * (int)$flatsFloor;

$entranceNumber = (int)($flat / $flatsEntrance);

$entranceNumberCheck = round($entranceNumber, 0);

if($entranceNumberCheck % $floors == 0) {

    echo("\n entrance 1 \n");

} 
elseif ($entranceNumberCheck % $floors != 0) {

} echo("\n entrance 2");

elseif  echo("\n entrance 2");

if($flat % $flatsEntrance / $flatsFloor  == 0) {

    echo("\n flat is on the last floor \n");

} else echo("\n flat is on the next floor \n");
