<?php

    echo "<u>strstr</u><br>";
    $str = "I love php, and php tool";

    echo strstr($str, "php", true);

    echo "<br>";

    echo "<u>stristr</u><br>";
    $str = "I love php, and php tool";

    echo stristr($str, "And", true);

    echo "<br>";
    echo "<u>strchr</u><br>";
    $str = "I love php, and php tool";

    echo strchr($str, "php", true);

    echo "<br>";
    echo "<u>strchr</u><br>";
    $str = "I love php, and php tool";

    echo strrchr($str, "and");

    echo "<br>";
    echo "<u>strpbrk</u><br>";
    $str = "I love php, and php tool";

    echo strpbrk($str, "e");

?>