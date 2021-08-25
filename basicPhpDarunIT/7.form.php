<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        echo "<ul>
            <li>$name</li>
            <li>$email</li>
            <li>$phone</li>
            <li>$age</li>
            <li>$dob</li>
            <li>$gender</li>
        </ul>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in data</title>
</head>
<body>

    <form action="" method="POST">

        <label for="name">Name</label><br>
        <input type="text" name="name" id=""><br>

        <label for="name">Email</label><br>
        <input type="text" name="email" id=""><br>

        <label for="name">Phone</label><br>
        <input type="text" name="phone" id=""><br>

        <label for="name">DOB</label><br>
        <input type="date" name="dob" id=""><br>

        <label for="name">Age</label><br>
        <input type="text" name="age" id=""><br>

        <label for="name">Gender</label><br>
        <input type="text" name="gender" id=""><br>

        <input type="submit" name="submit" id="">
    
    </form>

    <?php

        // echo "<ul>
        //     <li></li>
        //     <li>$email</li>
        //     <li>$phone</li>
        //     <li>$age</li>
        //     <li>$dob</li>
        //     <li>$gender</li>
        // </ul>"
    ?>

    <ul>
        <li><?php if (isset($_POST['name'])) {
         echo $name; }?></li>
        <li><?php if (isset($_POST['email'])) {
         echo $email; }?></li>
        <li><?php if (isset($_POST['phone'])) {
         echo $phone; }?></li>
        <li><?php if (isset($_POST['dob'])) {
         echo $dob; }?></li>
        <li><?php if (isset($_POST['age'])) {
         echo $age; }?></li>
        <li><?php if (isset($_POST['gender'])) {
         echo $gender; }?></li>
    </ul>
    
</body>
</html>