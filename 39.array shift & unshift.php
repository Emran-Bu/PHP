<?php

    $fruit = ['banana', 'grapes', 'apples', 'orange'];

    array_shift($fruit);

    echo "<pre>";
    print_r ($fruit);
    echo "</pre>";
    echo "<br>";

    $fruit = ['banana', 'grapes', 'apples', 'orange'];

    array_unshift($fruit, "guava", 'lime');

    echo "<pre>";
    print_r ($fruit);
    echo "</pre>";

?>