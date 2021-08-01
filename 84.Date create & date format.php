<?php

    $createDate = date_create("2022-07-01 01:26:00");
    echo date_format($createDate, "d/m/Y l H:i:sa");
    echo"<br>";
    $createDate = date_create("2012-07-01 01:26:00");
    echo date_format($createDate, "d/m/Y l H:i:sa");
    echo"<br>";
    $createDate = date_create("2012-07-01 01:26:00", timezone_open("Asia/kolkata"));
    echo date_format($createDate, "d/m/Y l H:i:sa");

?>