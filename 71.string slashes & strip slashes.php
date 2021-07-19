<?php

    echo "<u>addslashes</u><br>";
    $str = 'i love php and "i love php tool"';

    echo $str . "<br>";

    echo addslashes($str);

    echo "<br>";
    echo "<u>stripslashes</u><br>";
    $str = 'i love php and "i love php tool"';

    echo $str . "<br>";

    echo stripslashes($str);

    echo "<br>";
    echo "<u>addcslashes</u><br>";
    $str = 'i love php and "i love php tool"';

    echo $str . "<br>";

    echo addcslashes($str, "a..z");

    echo "<br>";

    echo "<u>stripcslashes</u><br>";
    $str = 'i love php and "i love php tool"';

    echo $str . "<br>";

    echo stripcslashes($str);

?>