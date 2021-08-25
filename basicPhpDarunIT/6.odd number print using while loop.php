<?php

    $a = 1;
    while ($a <= 10) {
        echo $a;
        $a++;
    }

    echo "<br>";

    $b = 1;

    do {
        
        echo $b;
        $b++;
        
    } while ($b <= 10);

    echo "<br>";

    $a = 1;
    while ($a <= 10) {

        if ($a%2==0) {
            echo $a;
        }
        
        $a++;
    }

    echo "<br>";

    $b = 1;

    do {
        
        if ($b%2==1) {
            echo $b;
        }

        $b++;
        
    } while ($b <= 10);

    

?>