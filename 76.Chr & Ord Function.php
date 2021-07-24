<?php

    $str = 65;
    // $str = 0120;
    // $str = 0x48;

    echo "The String: $str <br><br>";

    $chr = chr($str);

    echo "chr: " . $chr . "<br><br>";

    $ord = ord($chr);

    echo "ord: " . $ord . "<br><br>";
    
?>