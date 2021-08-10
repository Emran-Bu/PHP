<?php

    echo "<pre>";
    print_r($_REQUEST);
    echo "<pre>";

    echo $_REQUEST['fname'] . "<br>";
    echo $_REQUEST['age'] . "<br>";

    echo "<pre>";
    print_r($_SERVER);
    echo "<pre>";

    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
?>