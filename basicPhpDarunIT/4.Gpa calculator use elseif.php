<?php

    $marks = 99;

    if ($marks >=80 and $marks <= 100) {
        echo "You got A+";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo "You got A";
    } elseif ($marks >= 60 && $marks <= 69) {
        echo "You got A-";
    } elseif ($marks >= 50 && $marks <= 59) {
        echo "You got B";
    } elseif ($marks >= 40 && $marks <= 49) {
        echo "You got C";
    } elseif ($marks >= 33 && $marks <= 39) {
        echo "You got D";
    } elseif ($marks >= 0 && $marks <= 32) {
        echo "You got F";
    } else {
        echo "Invalid Number";
    }

?>