<?php

    echo "<u>strlen</u><br>";
    $str = "hello world";

    $arr = strlen($str);

    echo $arr;

    echo "<br>";

    echo "<u>str_word_count</u><br>";
    $str = "hello world";

    $arr = str_word_count($str);

    echo $arr;

    echo "<br>";

    echo "<u>str_word_count</u><br>";
    $str = "hello world";

    $arr = str_word_count($str, 1);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br>";

    echo "<u>substr_count</u><br>";
    $str = "hello world the beautiful place";

    $arr = substr_count($str, "the");

    echo $arr;

    echo "<br>";

    echo "<u>substr_count</u><br>";
    $str = "hello world the world beautiful place";

    $arr = substr_count($str, "world", 20, 15);

    echo $arr;

?>