<?php

    $age = array(
        "bill" => 25,
        "steves" => 26
    );

    print_r ($age);

    //

    $age = array(
        0 => 25,
        "bills" => "name",
        5 => 125,
        "steves" => 26
    );
    
    echo $age [0]."<br>";
    echo $age ["bills"]."<br>";
    echo $age [5]."<br>";
    echo $age ["steves"]."<br>";

    // 

    echo "<pre>";
    $age = [
        0 => 25,

        "bills" => "name",

        5 => 125,
        
        "steves" => 26
    ];
    
    var_dump ($age);
    echo "</pre>";

?>