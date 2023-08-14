<?php


$numbers = [1, 2, 5, 2.3, 'b', '_ali'];
// echo $numbers;

// var_dump($numbers);

$name = array("abc", "def");

// echo $name;
// var_export($name);

// var_export($numbers);


// print_r($numbers);

// echo $numbers[3];


$colors = [
    1 => "red",
    2 => "blue",
    3 => "wite"
];

// print_r($colors);

// echo $colors[2];


$person = [

    "firt_name" => "usman",
    "last_name" => "saeed"

];


// echo $person['last_name'];


$pepole = [
    $person = [

        "firt_name" => "usman",
        "last_name" => "saeed"

    ],

    $person = [

        "firt_name" => "ali",
        "last_name" => "jan"

    ],
    $person = [

        "firt_name" => "khan",
        "last_name" => "ahmad"

    ]




];

// echo $pepole[1]["last_name"];

var_dump(json_encode($pepole));
