<?php

setcookie('name', 'Usman', time() + 86400 * 30);
// setcookie('ali', 'hajar', time()+ 1000*2);


if (isset($_COOKIE['ali'])){
    echo $_COOKIE['ali'];
}