<?php

    echo "Random value is : " . rand() . "<br>";
    echo "Random value (10 , 20) of : " . rand(10, 20) . "<br>";
    echo "Random value (-10 , -20) of : " . rand(-10, -20) . "<br>";

    echo"<br>";

    echo "mt_rand is : " . mt_rand() . "<br>";
    echo "mt_rand (10 , 20) of : " . mt_rand(10, 20) . "<br>";
    echo "mt_rand (-10 , -20) of : " . mt_rand(-10, 20) . "<br>";

    echo"<br>";

    echo "lcg_value is : " . lcg_value() . "<br>";

?>