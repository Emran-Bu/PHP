<?php

    echo "<u>sort</u>";
    $food = array('orange', 'banana', 'grapes', 'apples');

    sort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>rsort</u>";
    $food = array('orange', 'banana', 'grapes', 'apples');

    rsort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>asort</u>";
    $food = array('orange', 'banana', 'grapes', 'apples');
    // $food = array(51, 45, 20, 15);

    asort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>arsort</u>";
    $food = array('orange', 'banana', 'grapes', 'apples');

    arsort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>ksort</u>";
    $food = array("c" => 'orange', "b" => 'banana', "d" => 'grapes', "a" => 'apples');

    ksort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>krsort</u>";
    $food = array("c" => 'orange', "b" => 'banana', "d" => 'grapes', "a" => 'apples');

    krsort($food);

    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
        
    echo "<br>";
    echo "<br>";
        
    echo "<u>natsort</u>";
    $food = array('img02.png', 'img12.png', 'img09.png','img15.png');
    
    natsort($food);
    
    echo "<pre>";
    print_r ($food);
    echo "</pre>";
    //
        
    echo "<br>";
    echo "<br>";
        
    echo "<u>natcasesort</u>";
    $food = array('Img02.png', 'img12.png', 'img09.png','Img15.png');
    
    natcasesort($food);
    
    echo "<pre>";
    print_r ($food);
    echo "</pre>";

    //
    echo "<br>";
    echo "<br>";
    
    echo "<u>array reverse</u>";
    $food = array('orange', 'banana', 'grapes', 'apples');

    $newArray = array_reverse($food);

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";
?>