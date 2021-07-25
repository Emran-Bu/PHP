<?php

    echo "Today full date & time is : " . date("d/m/Y h:i:sa") . "<br>";
    echo "<br>";
    echo "old day is : " . date("l", mktime(0,0,0,10,15,2003)) . "<br>";
    echo "old day is : " . date("d/m/Y", mktime(0,0,0,10,15,2003)) . "<br>";
    echo "old time is : " . date("h:i:sa", mktime(0,0,0,10,15,2003)) . "<br>";
    echo "old day is : " . date("h:i:sa", gmmktime(0,0,0,10,15,2003)) . "<br>";

?>