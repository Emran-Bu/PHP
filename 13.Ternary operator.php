<?php

    $a = 15;
    echo ($a > 20)? 'true': 'false <br>';

    ($a > 18)? $z = "true" : $z = "false <br>";
    echo $z;

    $z = ($a > 16)? "greater" :  "smaller<br>";
    echo $z;

    $z = $a > 14 ? "greater<br>" :  "smaller<br>";
    echo $z;

    $z = "<b>Value is: <b>" . (($a > 14)? "greater" :  "smaller<br>");
    echo $z;
?>