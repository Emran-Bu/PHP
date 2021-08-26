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