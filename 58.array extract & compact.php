<?php

    $a = 'orange';
    $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');


    extract($color);
    // extract($color, EXTR_OVERWRITE);
    // extract($color, EXTR_SKIP);
    // extract($color, EXTR_PREFIX_SAME, "test");
    // extract($color, EXTR_PREFIX_ALL, "test");

    echo "value of a: $a <br>";
    echo "value of b: $b <br>";
    // echo "value of a: $test_a <br>";
    // echo "value of a: $test_b <br>";
    // echo "value of a: $test_c <br>";
    echo "value of c: $c <br>";

?>

<br>

<?php

    $fname = 'ella';
    $lname = 'jackson';
    $age = 20;
    $gender = "male";

    $newArray = compact('fname', 'lname', 'age', 'gender');

    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>