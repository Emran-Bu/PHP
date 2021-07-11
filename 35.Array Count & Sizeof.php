<?php

    $food = array('orange', 'grapes', 'banana', 'apple');
    echo count($food);
    echo "<br>";
    echo sizeof($food);
    echo "<br>";

    $foods = array(
        'fruits' => array('orange', 'grapes', 'banana'),
        'vegetables' => array('carrot', 'collard', 'pea')
    );

    echo "<br>";
    echo count($foods);
    echo "<br>";
    echo count($foods,1);
    echo "<br>";
    echo count($foods['fruits']);
    echo "<br>";
    echo count($foods['vegetables']);

?>