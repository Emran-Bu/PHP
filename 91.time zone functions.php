<?php

    date_default_timezone_set("Asia/Dhaka");
    echo date_default_timezone_get() . "<br>";

    $tz = timezone_open("Asia/Dhaka");
    echo timezone_name_get($tz);

    echo "<pre>";
    print_r(timezone_location_get($tz));
    echo "</pre>";

    echo "<br>timezone_identifiers_list<br>";
    echo "<pre>";
    print_r(timezone_identifiers_list());
    echo "</pre>";
?>