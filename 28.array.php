<?php

    $colors = array("red", 4565, "green", 4545);
    echo $colors[3] . "<br>";

    //

    $colors = ["red", 4565, "green", 4545];
    echo $colors[0] . "<br>";
    echo $colors[1] . "<br>";
    echo $colors[2] . "<br>";
    echo $colors[3] . "<br>";

    //

    $colors = ["red", 4565, "green", 4545];
    print_r($colors);

    //
    
    $colors = ["red", 4565, "green", 4545];
    echo "<pre>";
    print_r($colors);
    echo "<pre>";

    //

    $colors[0] = "red" . "<br>";
    $colors[1] = "green" . "<br>";
    $colors[2] = "yellow" . "<br>";
    $colors[3] = "blue" . "<br>";
    echo "<pre>";
    print_r($colors);
    echo "<pre>";

    // 

    $colors = ["red", 4565, "green", 4545];

    echo "<ul>";
    for ($i=0; $i < 4 ; $i++) { 
        echo "<li>" . $colors[$i] . "</li>" ."<br>";
    }
    echo "</ul>";
?>