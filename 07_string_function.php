<?php

$string = "HEllo world";


echo strlen($string);
echo strrpos($string, 'w');
echo strrpos($string, "l");

echo strrev($string);
echo "<br>";

echo strtolower($string);
echo "<br>";

echo strtoupper($string);
echo "<br>";
echo ucwords($string);
echo "<br>";


echo str_replace('orld', 'usman', $string);

echo "<br>";

echo substr($string, 2, 8);
echo "<br>";

echo substr($string, 5);
echo "<br>";


if (str_starts_with($string, "HE"))
    echo 'yes';
else
    echo 'no';


echo "<br>";

if (str_ends_with($string, 'usman'))
    echo "yes";
else
    echo "no";

echo "<br>";


$string2 = "<h1>Hello </h1>";

echo $string2;

printf('%s likes to %s', 'Brad', 'code');

printf('%s like %s and love %s ', 'usman', 'ali', 'hajar');



