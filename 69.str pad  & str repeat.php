<?php

    $str = "-Hello World+";

    echo str_pad($str, 20, ".", STR_PAD_BOTH);
    echo "<br>";
    echo str_pad($str, 20, ".", STR_PAD_RIGHT);
    echo "<br>";
    echo str_pad($str, 20, ".", STR_PAD_LEFT);
    echo "<br>";
    echo str_repeat($str, 20);

?>