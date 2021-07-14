<?php

    
    $sum = [2, 4, 6, 8];

    $result = array_sum($sum);
    echo "Sum = " . $result;

    echo "<br>";
    
    $sum = ["a" => 1.5, "b" => .5, "c"=> 2.5, "d" => 1.5];

    $result = array_sum($sum);
    echo "Sum float = " . $result;

    echo "<br>";
    
    $sum = [2, 4, 6, 8];

    $result = array_product($sum);
    echo "Product = " . $result;

?>