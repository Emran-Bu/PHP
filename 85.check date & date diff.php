<?php

    echo "checkdate(29, 2, 2003) : " . checkdate(2, 29, 2004) . "<br>";
    echo "checkdate(29, 2, 2003) : " . checkdate(2, 29, 2003) . "<br>";
    echo "checkdate(28, 2, 2003) : " . checkdate(2, 28, 2003) . "<br>";
    echo "checkdate(28, 2, 2024) : " . checkdate(2, 28, 2024) . "<br>";

    $date1 = date_create("2021-07-01");
    $date2 = date_create("2021-08-20");

    $diff = date_diff($date1, $date2);

    echo "<pre>";
    print_r($diff);
    echo "<pre>";

    echo $diff->days . "days";

    $date1 = date_create("2021-07-01");
    $date2 = date_create("2021-05-01");

    $diff = date_diff($date1, $date2);

    echo "<pre>";
    print_r($diff);
    echo "<pre>";

    echo $diff->format("%r%a %m days");
?>