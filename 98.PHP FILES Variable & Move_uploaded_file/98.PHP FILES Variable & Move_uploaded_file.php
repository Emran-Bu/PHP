<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILES Variable & Move_uploaded_file</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image"><br><br>
        <input type="submit">
    
    </form>
</body>
</html>

<?php

    // echo"<pre>";
    // print_r($_FILES);
    // echo"</pre>";

    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        if (move_uploaded_file($file_tmp, "upload_images/" . $file_name)) {
            echo "Successfully uploaded";
        } else{
            echo "Couldn't upload the file"; 
        }
    }


?>