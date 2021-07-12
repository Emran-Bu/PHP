<?php

    $food = ['orange', 'grapes', 'banana', 'apples'];
    $veggie = ['carrot', 'pea'];
    $color = ['red', 'green', 'blue'];

    $newArray = array_replace($food, $veggie, $color);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";
    echo "<br>";


    $food = ["a" => 'orange', 'grapes', "1" => 'banana', 'apples'];
    $veggie = ['carrot', "a" =>'pea'];
    $color = ['red', 'green', "1" => 'blue'];

    $newArray = array_replace($food, $veggie, $color);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";
    echo "<br>";



    $array1 = array(
        "a" => array('red'),
        "b" => array('green', 'yellow')
    );

    $array2 = array(
        "a" => array('pink'),
        "b" => array('black')
    );

    $newArray1 = array_replace_recursive($array1, $array2);

    echo "<pre>";
    print_r ($newArray1);
    echo "</pre>";

?>