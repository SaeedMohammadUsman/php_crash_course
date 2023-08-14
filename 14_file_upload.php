<?php

if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
    if (!empty($_FILES['upload']['name'])) {

        // print_r($_FILES) ;
        $file_name = $_FILES['upload']['name'];
        $file_temp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";
        $file_size = $_FILES['upload']['size'];

        //get fiel ext

        $fiel_ext = explode('.', $file_name);
        $fiel_ext = strtolower(end($fiel_ext));

        //validate file ext
        if (in_array($fiel_ext, $allowed_ext)) {

            if ($file_size <= 1000000) {
            } else {
                $massage = '<p style="color: red;">file is to large </p>';
                move_uploaded_file($file_temp, $target_dir);
                $massage = '<p style="color: green;">file uploaded </p>';
            }
        } else
            $massage = '<p style="color: red;">Invalied file type </p>';
    } else {
        $massage = '<p style="color: red;">Please Chose a File </p>';
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
    <?php echo $massage ?? null;  ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        select image to upload:
        <input type="file" name="upload">

        <input type="submit" value="submit" name="submit">


    </form>
</body>

</html>