<?php

    echo "<u>array_fill_keys</u>";

    $a = array("a", "b", "c", "d", "e");

    $newArray = array_fill_keys($a, 'test');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<u>array_fill</u>";

    $newArray = array_fill(3, 5, 'testing');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>