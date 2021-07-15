<?php
    $a = ['orange','banana','apple'];

    $newArray = array_reduce($a, 'test' , 'guava');

    echo "<pre>";
    print_r($newArray);
    echo"</pre>";

    function test($value1, $value2){
        return $value1 . "_" . $value2;
    }
?>