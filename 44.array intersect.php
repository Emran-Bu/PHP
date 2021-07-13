<?php

    echo "array intersect";
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

    $newArray = array_intersect($a1, $a2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "array intersect key";
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

    $newArray = array_intersect_key($a1, $a2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "array intersect assoc";
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

    $newArray3 = array_intersect_assoc($a3, $b3);

    echo "<pre>";
    print_r ($newArray3);
    echo "</pre>";

    echo "<br>";
    echo "<br>";


    echo "array intersect uassoc";
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

    $newArray3 = array_intersect_uassoc($a3, $b3, 'compare');

    echo "<pre>";
    print_r ($newArray3);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    function compare($a, $b){
        if ($a == $b) {
            return 0;
        } else{
            return ($a > $b)? 1 : -1;
        }
    }

?>