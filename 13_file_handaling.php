<?php

$file = 'extra/user.txt';

 if (file_exists($file))
 {
    // echo readfile($file);
    $handle= fopen($file,'r');
    $content= fread($handle,filesize($file));
    fclose($handle);
    echo $content;
 }else
 {
    $handle = fopen($file,'w');
    $content= 'Brad'.PHP_EOL.'zubair'.PHP_EOL.'talha';

fwrite($handle,$content);
fclose($handle);

 }
