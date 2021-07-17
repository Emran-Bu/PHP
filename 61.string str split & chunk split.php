<?php

    $str = "Hello World";

    // $arr = str_split($str);
    $arr = str_split($str, 2);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $str = "Hello World";

    $ar = chunk_split($str, 1, ' + ');

    echo $ar;

?>