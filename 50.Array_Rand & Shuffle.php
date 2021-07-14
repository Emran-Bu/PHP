<?php

    echo "array rand";

    $color = array('red', 'green', 'yellow', 'black', 'purple', 'cyan', 'magenta', 'blue');

    $newArray = array_rand($color, 2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo $color[$newArray [0]] ."<br>";
    echo $color[$newArray [1]];

    echo "<br>";
    echo "<br>";


    echo "associative array rand";

    $color = array("a" => 'red', "b" => 'green', "c" => 'yellow', "c" => 'black', "d" => 'purple');

    $newArray = array_rand($color, 2);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo $color[$newArray [0]] ."<br>";
    echo $color[$newArray [1]];

    echo "<br>";
    echo "<br>";

    
    echo "array shuffle";

    $color = array('red', 'green', 'yellow', 'black', 'purple', 'cyan', 'magenta', 'blue');

    shuffle($color);

    echo "<pre>";
    print_r ($color);
    echo "</pre>";

?>