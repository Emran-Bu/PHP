<?php

    function test($num){
        $num += 5;
    }

    $number = 10;
    test($number);
    echo "the original value : $number <br>";
    // 
    function testing(&$num){
        $num += 5;
    }

    $number = 10;
    testing($number);
    echo "the original value : $number <br>";

?>