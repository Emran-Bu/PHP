<?php

    echo "Array column";
    $array = array(
        array(
            'id' => 2020,
            'fname' => "anil",
            'lname' => "bagchir"
        ),

        array(
            'id' => 2021,
            'fname' => "sha",
            'lname' => "ali"
        ),

        array(
            'id' => 2022,
            'fname' => "mui",
            'lname' => "kha"
        )
    );

    $newArray = array_column($array, 'fname', 'id');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "Array chunk";
    $array = array('id', 2020,'fname', "anil", 'lname' ,"bagchir");

    $newArray = array_chunk($array, 2, true);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo "Array chunk";
    $array = array(
        
            'id' => 2020,
            'fname' => "anil",
            'lname' => "bagchir"
    );

    $newArray = array_chunk($array, 2, true);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>