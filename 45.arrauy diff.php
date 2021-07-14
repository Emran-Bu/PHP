<?php

    echo "<u>array diff</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "yellow",
        "d" => "blue"
    );

    $a2 = array(
        "e" => "cyan",
        "f" => "green",
        "g" => "magenta",
        "h" => "blue"
    );

    $newArray = array_diff($a1, $a2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "<u>array diff key</u>";
    $a1 = array(
        "a" => "red",
        "b" => "green",
        "c" => "yellow",
        "d" => "blue"
    );

    $a2 = array(
        "e" => "cyan",
        "c" => "green",
        "a" => "magenta",
        "h" => "blue"
    );

    $newArray = array_diff_key($a1, $a2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "<u>array diff assoc</u>";
    $a3 = array(
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow"
    );

    $b3 = array(
        "a" => "red",
        "f" => "green",
        "u" => "blue",
        "d" => "purple"
    );

    $newArray3 = array_diff_assoc($a3, $b3);

    echo "<pre>";
    print_r ($newArray3);
    echo "</pre>";

    echo "<br>";
    echo "<br>";


    echo "<u>array intersect uassoc</u>";
    $a3 = array(
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow"
    );

    $b3 = array(
        "a" => "red",
        "f" => "green",
        "c" => "blue",
        "d" => "purple"
    );

    $newArray3 = array_diff_uassoc($a3, $b3, 'compare');

    echo "<pre>";
    print_r ($newArray3);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    function compare($a, $b){
        if ($a === $b) {
            return 0;
        } else{
            return ($a > $b)? 1 : -1;
        }
    }

?>