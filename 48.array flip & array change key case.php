<?php

    echo "<u>array flip</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "yellow",
        "d" => "blue"
    );

    $newArray = array_flip($a1);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";


    echo "</br>";
    echo "</br>";

    echo "<u>array change key case</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "red",
        "d" => "blue"
    );

    $newArray = array_change_key_case($a1, CASE_UPPER);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>