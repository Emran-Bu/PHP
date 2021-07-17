<?php

    $text = "Hello world. It is a beautiful place";

    $array = explode(' ' , $text);


    echo "<pre>";
    print_r($array);
    echo "<pre>";

    echo "<br>";
    echo "<br>";

    $text = ["Hello", "world.", "It", "is", "a", "beautiful", "place"];

    $array = implode(' ' , $text);


    echo "<pre>";
    print_r($array);
    echo "<pre>";
?>