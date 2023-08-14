<?php


// $frut= ["apple","orange", "banana", "mango"];


// echo count($frut);

// var_dump(in_array("banana",$frut));

// $frut [] = "newFrut";
// $frut [] = "Frut";

// array_push($frut,"hi usman");

// array_unshift($frut, "ali","ahmad");

// array_pop ($frut);
// array_pop ($frut);

// array_shift($frut);

// unset($frut[2]);



// $chanck = array_chunk($frut, 3);

// print_r($chanck);




// print_r($frut);


// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];
// $arr3 = [7, 8, 9];


// $arr4= array_merge($arr1,$arr2,$arr3);

// print_r($arr4);

$a = ['G', 'Y', 'W'];
$b = ['B', 'R', 'Z'];
$c = ['O', 'D', 'M'];


$d = array_combine($a, $b);

// print_r($d);

$key = array_keys($d);
// print_r($key);

// $fliipped= array_flip($d);

// print_r($fliipped);

$numbers = range(1, 10);
// // print_r($numbers);

// $newNumber= array_map(function ($n){
//     return "NUMBER $n"; 
// },$numbers);

// print_r($numbers);

// $less= array_filter($numbers,fn($numbers) => $numbers <= 4);



// print_r($less);



$sum = array_reduce($numbers, fn ($carry, $numbers) => $carry + $numbers);


var_dump(($sum));
 