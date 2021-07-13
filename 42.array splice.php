<?php

    $color = ['red', 'green', 'yellow', 'black'];

    array_splice($color, 1, 2);

    echo "<pre>";
    print_r ($color);
    echo "</pre>";

    $color2 = ['red', 'green', 'yellow', 'black'];
    $fruit = ['apple', 'banana'];

    array_splice($color2, 1, 2, $fruit);

    echo "<pre>";
    print_r ($color2);
    echo "</pre>";

    $color3 = ['red', 'green', 'yellow', 'black'];
    $fruits = ['apple', 'banana'];

    array_splice($color3, count($color3), 0, $fruits);

    echo "<pre>";
    print_r ($color3);
    echo "</pre>";

?>