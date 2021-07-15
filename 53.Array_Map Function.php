<?php

    echo "<u>array_map 1</u> <br>";

    $a = [1, 2, 3, 4, 5];

    $newArray = array_map('square' ,$a);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function square($value){
        return $value * $value;
    }

    echo "<br>";
    echo "<br>";
    //
    echo "<u>array_map 2</u> <br>";

    $a = [1, 2, 3, 4, 5];
    $b = ['red', 'green', 'yellow', 'blue', 'cyan'];

    $newArray = array_map('sq' , $a , $b);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function sq($value1, $value2){
        return "$value1 for $value2";
    }
    //

    echo "<br>";
    echo "<br>";
    //
    echo "<u>array_map 3</u> <br>";

    $a = [1, 2, 3, 4, 5];
    $b = ['red', 'green', 'yellow', 'blue', 'cyan'];

    $newArray = array_map('squ' , $a , $b);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function squ($value1, $value2){
        return [$value1 => $value2];
    }
    echo "<br>";
    echo "<br>";
    //

    echo "<u>array_map 4</u><br>";

    $color = array(
        "a"=> "red",
        "b" => "green",
        "c" => "blue"
    );

    $newArray = array_map('squr' ,$color);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function squr($value){
        return strtoupper($value);
    }

?>