<?php

    $date = date_create("2015-05-15");
    date_add($date, date_interval_create_from_date_string("15 days"));

    echo "date add : " . date_format($date, "d-m-Y") . "<br>";

    $date = date_create("2015-05-15");
    date_sub($date, date_interval_create_from_date_string("14 days"));

    echo "date sub : " . date_format($date, "d-m-Y") . "<br>";

    $date = date_create("2015-05-15");
    date_modify($date, "-14 days");

    echo "date Modify sub : " . date_format($date, "d-m-Y") . "<br>";

    $date = date_create("2015-05-15");
    date_modify($date, "17 days");

    echo "date Modify add : " . date_format($date, "d-m-Y") . "<br>";

?>