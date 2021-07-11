<?php

    $food = array('banana', 'apples', 55, 'grapes');
    echo in_array('apples', $food);
    echo in_array('orange', $food);
    echo "<br>";

    if (in_array('apples', $food)) {
        echo "Find Successfully";
    } else {
        echo "Can't Find";
    }

    echo "<br>";

    if (in_array('55', $food, true)) {
        echo "Find Successfully";
    } else {
        echo "Can't Find";
    }

    echo "<br>";

    $a = array(
        array('p', 'c'),
        array('d', 'e'),
        '0'
    );

    echo "<br>";

    if (in_array(array('p', 'c'), $a, true)) {
        echo "Find Successfully";
    } else {
        echo "Can't Find";
    }

    echo "<br>";

    $food = array('banana', 'apples', 55, 'grapes');
    echo array_search('grapes', $food);
    echo array_search('orange', $food);
    echo "<br>";

    echo "<br>";

    $foods = [

        "e" => "apples",
        "b" => "orange"

        ];

        $foo = array(
            'a' => 'apple',
            'b' => 'grapes'
        );

        echo array_search("apple",$foo);
        echo "<br>";
        echo array_search("apples",$foods, true);

?>