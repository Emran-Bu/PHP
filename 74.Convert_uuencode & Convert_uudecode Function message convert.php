<?php

    $str = "Hello";

    echo "The String: $str <br><br>";

    $uuencode = convert_uuencode($str);

    echo "convert_uuencode: " . $uuencode . "<br><br>";

    $uudecode = convert_uudecode($uuencode);

    echo "convert_uudecode: " . $uudecode . "<br><br>";
    
?>