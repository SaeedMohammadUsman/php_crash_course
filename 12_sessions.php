<?php
session_start();
if (isset($_POST['submit'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $passowrd = $_POST['password'];
    if ($username == 'usman' && $passowrd == '123ht') {
        $_SESSION['username'] = $username;
        header('Location: /php-work/extra/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="POST">

        <div>
            <label for="username">UserName</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">


    </form>
</body>

</html>