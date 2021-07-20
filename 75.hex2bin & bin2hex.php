<?php

    $str = "Hello World";

    echo "The String: $str <br><br>";

    $bin2hex = bin2hex($str);

    echo "bin2hex: " . $bin2hex . "<br><br>";

    $hex2bin = hex2bin($bin2hex);

    echo "hex2bin: " . $hex2bin . "<br><br>";
    
?>