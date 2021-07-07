<?php

    function sum($math, $eng, $sc)
    {
        $result = $math + $eng + $sc;
        return $result;
    }

    $total = sum(10 , 20 , 30);
    echo $total ."<br>";

    function percentage($per)
    {
        $result = $per / 3;
        echo $result . "%";
    }

    percentage($total)

?>