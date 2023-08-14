<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?> </li>
        <li>Server Name: <?php echo $_SERVER["SERVER_NAME"]; ?></li>
        <li>Srver Port : <?php echo $_SERVER["SERVER_PORT"]; ?> </li>
        <li>Curent File Dire: <?php echo $_SERVER["PHP_SELF"]; ?></li>
        <li>Requets URL: <?php echo $_SERVER['REQUEST_URI']; ?></li>

        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>

        <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>

        <li>Remote Address: <?php echo $_SERVER ['REMOTE_ADDR'] ;?></li>
        
        <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT'];  ?></li>
 
    </ul>


</body>

</html>