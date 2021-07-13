<?php

    $color = [
        'first' => 'red', 
        'second' => 'green',
        'third' => 'yellow',
        'fourth' => 'black'
    ];

    $newArray = array_keys($color);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    $color2 = [
        'first' => 'red', 
        'second' => 'green',
        'third' => 'yellow',
        'fourth' => 'black'
    ];
    $newArray2 = array_key_first($color2);

    echo "<pre>";
    print_r ($newArray2);
    echo "</pre>";

    $color3 = [
        'first' => 'red', 
        'second' => 'green',
        'third' => 'yellow',
        'fourth' => 'black'
    ];
    $newArray3 = array_key_last($color3);

    echo "<pre>";
    print_r ($newArray3);
    echo "</pre>";

    $color4 = [
        'first' => 'red', 
        'second' => 'green',
        'third' => 'yellow',
        'fourth' => 'black'
    ];
    $newArray4 = key_exists("third",$color4);

    if ($newArray4) {
        echo "Key Exits";
    } else{
        echo "key doesn't exits";
    }

?>