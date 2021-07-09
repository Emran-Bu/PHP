<?php

    $age = [
        "steve" => 15,
        "bill" => 25,
        "elon" => 35
    ];

    foreach ($age as $value) {
        echo $value . "<br>";
    }

?>

<br>

<?php

    $age = [
        "steve" => 15,
        "bill" => 25,
        "elon" => 35
    ];

    foreach ($age as $key => $value) {
        echo "$key = $value <br>";
    }

?>