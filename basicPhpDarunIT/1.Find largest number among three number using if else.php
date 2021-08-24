<?php

    $a = 10;
    $b = 25;
    $c = 20;

    if ($a > $b and $a > $c) {
        echo $a . " is greater";
    } 
    elseif ($b > $a and $b > $c) {
        echo $b . " is greater";

    } elseif($c > $a and $c > $b) {
        echo $c . " is greater";
    }

?>