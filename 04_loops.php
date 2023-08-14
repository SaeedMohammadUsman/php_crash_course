

<?php


// for ($i=10; $i>0; $i--)
//     echo $i;
$i = -50;
// while ($i>0)
// {
//     echo $i;
//    echo' <br>';
//     $i--;
// }

// do {

//     echo $i.'<br>';
//    $i--;
// }while($i>-3);


$name =["ahmad", "khan", "ali", "jan"];

// for ($i=0; $i<count($name); $i++)
//     echo $name[$i]."<br>";

// foreach($name as $na)
//     echo $na."<br>";


foreach($name as $index =>$na)
    echo $index+1 . "- ". $na.'<br>';
