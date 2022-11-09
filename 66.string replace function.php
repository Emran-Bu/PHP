<?php

    echo "<u>str_replace</u><br>";
    $str = "I love php, and i love php tool";

    echo str_replace('php','python',$str);

    echo "<br>";

    echo "<u>str_replace</u><br>";
    $str = "Hi I love php, and i love php tool";
    $find = ["Hi", "php"];
    $replace = ["Hello", "python"];

    echo str_replace($find,$replace,$str);

    echo "<br>";

    $str = "Hi I love php, and i love php tool";
    $find = [" ", ","];
    $replace = ["~", "_"];

    echo str_replace($find,$replace,$str);

    echo "<br>";

    $str = "Hi/I £love_php 41563456450 00000, -and !i 124love: php tool";
    echo preg_replace('/[^A-Za-z0-9\-]/', '_', $str);
    echo "<br>";

    echo "<u>substr_replace</u><br>";
    $str = "I love php, and i love php tool";

    echo substr_replace($str, 'java', 7);
    // echo substr_replace($str, 'java', 7, -5);
    // echo substr_replace($str, 'java', 0, 0);

    echo "<br>";

    echo "<u>strtr</u><br>";
    $str = "I love php, and i love php tool";

    echo strtr($str, 'ov', 'ik');

    echo "<br>";

    echo "<u>strtr</u><br>";
    $str = "I love php, and i love php tool";
    $arr = ["love" => "like", "php" => "javaScript"];

    echo strtr($str, $arr);

    echo "<br>";

?>