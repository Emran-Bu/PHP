<?php

    $str = "Hello";

    echo "The String: $str <br><br>";

    echo "md5 Binary 16 letter: " . md5($str, true) . "<br><br>";
    echo "md5 Hex 32 letter: " . md5($str) . "<br><br>";

    echo "sha1 Binary 20 letter: " . sha1($str, true) . "<br><br>";
    echo "sha1 Hex 40 letter: " . sha1($str) . "<br><br>";

    if (md5($str) == "8b1a9953c4611296a827abf8c47804d7") {
        echo "Password Match";
    } else{
        echo "Password No Match";
    }
    
?>