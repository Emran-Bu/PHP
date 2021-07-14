<?php

    echo "<u>array value</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "yellow",
        "d" => "blue"
    );

    $newArray = array_values($a1);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";


    echo "</br>";
    echo "</br>";

    echo "<u>array unique</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "red",
        "d" => "blue"
    );

    $newArray = array_unique($a1);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>