<?php

    $fruit = ['banana', 'grapes', 'apples', 'orange'];

    array_pop($fruit);

    echo "<pre>";
    print_r ($fruit);
    echo "</pre>";
    echo "<br>";

    $fruit = ['banana', 'grapes', 'apples', 'orange'];

    array_push($fruit, "guava", 'lime');

    echo "<pre>";
    print_r ($fruit);
    echo "</pre>";

?>