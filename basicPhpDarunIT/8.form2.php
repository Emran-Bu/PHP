<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in data</title>
</head>
<body>

    <form action="9.bio.php" method="POST">

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

    <!-- <ul>
        <li><?php if (isset($_POST['name'])) {
         echo $_POST['name']; }?></li>
        <li><?php if (isset($_POST['email'])) {
         echo $_POST['email']; }?></li>
        <li><?php if (isset($_POST['phone'])) {
         echo $_POST['phone']; }?></li>
        <li><?php if (isset($_POST['dob'])) {
         echo $_POST['dob']; }?></li>
        <li><?php if (isset($_POST['age'])) {
         echo $_POST['age']; }?></li>
        <li><?php if (isset($_POST['gender'])) {
         echo $_POST['gender']; }?></li>
    </ul> -->
    
</body>
</html>