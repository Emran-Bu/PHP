<?php

    $fruits = ['banana', 'grapes', 'apples', 'orange'];
    $veggie = ['carrot', 'pea'];

    $newArray = array_merge($fruits, $veggie);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";
    echo "<br>";

    $color = ["a" => 'red', "b" => 'green', 'yellow', 'blue'];
    $color2 = ["b" => 'cyan', 'magenta'];
    $newArray1 = array_merge_recursive($color, $color2);

    echo "<pre>";
    print_r ($newArray1);
    echo "</pre>";
    echo "<br>";

    $name = ['jack', 'jara', 'eli', 'veer'];
    $age = ['21', '15', '18', '16'];

    $newArray = array_combine($name, $age);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>