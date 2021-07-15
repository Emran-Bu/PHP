<?php

    echo "<u>array_walk</u> <br>";

    $a = array(
        "a"=> "Lemon",
        "b" => "Orange",
        "c" => "grapes",
        "d" => "guava",
        "e" => "banana"
    );

    $newArray = array_walk($a, 'test', 'is a key of');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function test($value, $key, $param){
        echo "$key $param $value <br>";
    }

    echo "<u>array_walk_recursive</u><br>";

    $color = array(
        "a"=> "red",
        "b" => "green",
        "c" => "blue"
    );

    $a = array(
        $color,
        "a"=> "Lemon",
        "b" => "Orange",
        "c" => "grapes",
        "d" => "guava",
        "e" => "banana"
    );

    $newArray = array_walk_recursive($a, 'testing', 'is a key of');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function testing($value, $key, $param){
        echo "$key $param $value <br>";
    }

?>