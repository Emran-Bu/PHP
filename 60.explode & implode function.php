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

    $sr = "Hello World.jpg";
     list($fi) = explode('.' , $sr);
     list($_, $se) = explode('.' , $sr);
     $first = current(explode('.' , $sr));
     $second = end(explode('.' , $sr));
     echo $first . "<br>";
     echo $second . "<br>";
     echo $se . "<br>";
     echo $fi . "<br>";

     echo "<br>";

    $str = "Hi/I £love_php 41563456450 00000, -and !i 124love: php tool";
    echo preg_replace('/[^A-Za-z0-9\-]/', '_', $str);
    echo "<br>";

?>