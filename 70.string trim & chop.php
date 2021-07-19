<?php

    $str = "Hello World";

    echo $str . "<br>";

    echo trim($str, "Hd");
    echo "<br>";
    echo rtrim($str, "rld");
    echo "<br>";
    echo ltrim($str, "Hell");
    echo "<br>";
    echo chop($str, "H");

?>