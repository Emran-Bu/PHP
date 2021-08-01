<?php

    echo "getDate<br>";
    $date = getdate();
    echo $date['mday']. "-" . $date['mon'] . "-" . $date['year'] . "-" . $date['weekday'];

    echo "<pre>";
    print_r(getdate());
    echo "</pre>";

    echo "old getDate<br>";
    $oldDate = mktime(0,0,0,03,15,2015);
    $date = getdate($oldDate);
    echo $date['mday']. "-" . $date['mon'] . "-" . $date['year'] . "-" . $date['weekday'];

    echo "<pre>";
    print_r(getdate($oldDate));
    echo "</pre>";

    echo "old get time of day<br>";

    echo "<pre>";
    print_r(gettimeofday());
    echo "</pre>";

    echo "localtime<br>";

    echo "<pre>";
    print_r(localtime(time(), true));
    echo "</pre>";

?>