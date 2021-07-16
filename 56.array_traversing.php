<?php

    echo "<u>Traversing</u><br>";
    $food = array('orange', 'banana', 'grapes', 'apples');

    echo "<b>Current: </b>" . current($food). "<br>";
    echo "<b>Key: </b>" . key($food). "<br>";
    echo "<b>pos: </b>" . pos($food). "<br>";

    next($food);
    echo "<b>next: </b>" . current($food). "<br>";

    next($food);
    echo "<b>next: </b>" . current($food). "<br>";

    prev($food);
    echo "<b>Prev: </b>" . current($food). "<br>";

    prev($food);
    echo "<b>Prev: </b>" . current($food). "<br>";

    end($food);
    echo "<b>End: </b>" . current($food). "<br>";

    reset($food);
    echo "<b>Reset: </b>" . current($food). "<br>";

?>