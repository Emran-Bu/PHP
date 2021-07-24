<?php

    echo "min value<br>";
    echo min(2, 5, 1, 8, 10);

    echo "<br>max value<br>";
    echo max(2, 5, 1, 8, 10);

    echo "<br>min boolean value<br>";
    echo min(true , false);

    echo "<br>max boolean value<br>";
    echo max(true , false);

    echo "<br>";
    echo "<br>min array value<br>";
    $arr = min(array(2, 5, 1), array(2, 4, 3));

    echo "<pre>";
    print_r($arr);
    echo "<pre>";

    echo "<br>max array value<br>";
    $arr = max(array(2, 5, 1), array(2, 4, 3));

    echo "<pre>";
    print_r($arr);
    echo "<pre>";

?>